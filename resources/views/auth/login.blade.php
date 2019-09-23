@extends('layouts.main')

@section('title', trans('header.login'))

@section('content')
    <div>
        <h1>Log In</h1>
        @include('partials.errors')
        {!! Form::open(['route' => 'login']) !!}
        <div class="row">
            <div class="row-item full">
                {!! Form::label('email', trans('header.email')) !!}
                {!! Form::email('email', '', ['class' => $errors->has('email') ? 'has-error' : '', 'maxlength' => 255,'placeholder' => trans('header.email')]) !!}
            </div>
        </div>
        <div class="row">        
            <div class="row-item full">
                {!! Form::label('password', trans('header.password')) !!}
                {!! Form::password('password', ['class' => $errors->has('password') ? 'has-error' : '', 'maxlength' => 255,'placeholder' => trans('header.password')]) !!}
                <p style="text-align: right; margin-top: 1em;"><a href="{{ route('password.request') }}">@lang('header.forgot_password')</a></p>
            </div>
        </div>
        <div class="row">
            <div class="row-item">
                {!! Form::submit(trans('header.login'), ['class' => 'big-button']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
