@extends('templates.nav')
@section('title')Add review @endsection
@section('content')
    <h1 class="mt-5" id="form_title">Form for added new review</h1>

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
                <div class="container">
                    <form action="/add-review/check" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="title" id="title"
                                   class="form-control" placeholder="name@example.com"><label
                                for="title">Title: </label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="review" id="review" class="form-control" placeholder="name@example.com"
                                      cols="300" rows="130"></textarea><label
                                for="title">Review: </label>
                        </div>
                        <button type="submit" class="btn btn-success">Add review</button>
                    </form>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection
