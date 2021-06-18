@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <br><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>@lang('lables.task.newTask')</h4>
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')
                        <!-- Display Action Success -->
                        @include('common.success')

                        <!-- New Task Form -->
                        <form action="{{ route('tasks.store')}}" method="POST" >
                            @csrf
                            <div class="form-group">
                             <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="@lang('lables.task.nameHide')">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-plus"></i> @lang('lables.task.addTask')</button>
                        </form>
                    </div>
                </div>
                <br><br>
                <!-- Current Tasks -->
                @if (count($tasks) > 0)
                    <div class="panel">
                        <div class="panel-heading">
                            <h4>@lang('lables.task.currentTasks')</h4>
                        </div>
                        
                        <div class="panel-body">
                            <table class="table table-striped">
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i> @lang('lables.task.delete')
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        {{ $tasks->links() }}
                    </div>
                @else
                <div class="panel">
                    <div class="panel-heading">
                        <h4>@lang('lables.task.currentTasks')</h4>
                    </div>
                    
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <td>
                                    @lang('messages.task.index.noColumn')
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
