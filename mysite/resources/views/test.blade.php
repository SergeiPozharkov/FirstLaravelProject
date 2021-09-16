@extends('templates.nav')
@section('title')Registration @endsection
@section('content')
    <h1>Login</h1>
    @extends('aut.login')
    <h1>Register</h1>
    @extends('aut.register')
    <h1>Forgot pass</h1>
    @extends('aut.forgot-password')
    <h1>Reset pass</h1>
    @extends('aut.reset-password')
@endsection
