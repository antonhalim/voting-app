@extends('app')

@section('content')
    <div class="wrapper">
        <h1 class="highlighted">Administrator Sign In</h1>

        <p>With great power, comes great responsibility...</p>

        {!! Form::open(['route'=> ['sessions.adminLogin'], 'id' => 'sign_in_form']) !!}

        {!! Form::label('email', 'Email') !!}
        {!! form_error('email', $errors) !!}
        {!! Form::text('email', null, ['placeholder' => 'you@dosomething.org']) !!}

        {!! Form::label('password', 'Password') !!}
        {!! form_error('password', $errors) !!}
        {!! Form::password('password') !!}

        {!! Form::submit('Sign In', ['class' => 'btn']) !!}
        {!! Form::close() !!}

        <p>
            <a href="#">Forgot password</a>
        </p>
    </div>
@stop
