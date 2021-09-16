@extends('templates.nav')
@section('title')Authorization @endsection
@section('content')
    <h1 class="mt-5" id="form_title">Authorization</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{  $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="content">
                    <form action="/authorization/check" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="login" id="login"
                                   class="form-control" placeholder="name@example.com"><label
                                for="title">Login: </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="pass" id="pass"
                                   class="form-control" placeholder="name@example.com"><label
                                for="title">Pass: </label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection
