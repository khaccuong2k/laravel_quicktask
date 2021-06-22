<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $paginateNumber = config('app.paginateNumber.tableTask');

            $tasks = Auth::user()->tasks()->orderBy('id', 'desc')->paginate($paginateNumber);

            return view('task.index', compact('tasks'));
        } catch(QueryException $ex) {
            Log::info('message.task.index.noColumn');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskStoreRequest $request)
    {
        try {
            $dataStore = $request->except('_token');

            $storeTask = Auth::user()->tasks()->create($dataStore);

            if ($storeTask) {
                return back()->withSuccess('messages.task.store.success');
            }
    
            return back()->withError('messages.task.store.error')->withInput();
        } catch(QueryException $ex) {
            Log::info('messages.task.store.error', ['dataStore' => $dataStore]);

            return back()->withError('messages.task.store.error')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $findTaskId = Task::find($id);

            if ($findTaskId) {
                $deleteTask = $findTaskId->delete();

                if ($deleteTask) {
                    return back()->withSuccess('messages.task.delete.success');
                }

                return back()->withError('messages.task.delete.error');
            }
    
            return back()->withError('messages.task.delete.notExist');
        } catch(ModelNotFoundException $ex) {
            Log::info('message.task.delete.notExist', ['id' => $id]);

            return back()->withErrors($ex);
        }
    }
}
