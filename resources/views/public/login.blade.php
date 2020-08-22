@extends('public.layouts.app')
@section('content')
    <div class="col-md-4 offset-4 login-blocks">
        @if ($message = Session::get('error'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <h2>Login : </h2>
        {{ Form::open(['url' => 'user-login', 'method' => 'post','required']) }}
        <div class="form-group">
            <label for="email">Email</label>
            {{Form::email('email', null, ['class' => 'form-control', 'id' => 'email','autocomplete'=> 'off','required'])}}
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            {{Form::password('password', ['class' => 'form-control', 'id' => 'password','autocomplete'=> 'off','required'])}}
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-default"> Log in</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection
