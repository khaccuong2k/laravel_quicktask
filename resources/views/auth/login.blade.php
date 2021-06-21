@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <!-- Display Validation Errors -->
                @include('common.errors')
                <form action="{{ route('users.handle-login') }}" method="post">
                @csrf
                    <div class="form-group">
                      <label for="">@lang('lables.login.email')</label>
                      <input type="email"
                        class="form-control" name="email" id="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">@lang('lables.login.password')</label>
                        <input type="password"
                          class="form-control" name="password" id="" aria-describedby="helpId">
                    </div>
                    <input type="submit" value="Login" class="btn btn-info">
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
