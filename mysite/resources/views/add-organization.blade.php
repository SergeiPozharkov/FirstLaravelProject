@extends('templates.nav')
@section('title')Add organization @endsection
@section('content')
    <h1 class="mt-5" id="form_title">Form for added new organisation</h1>

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
                    <form action="/add-organization/check" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="organisations_name"
                                   id="organisations_name"
                                   placeholder="name@example.com"
                                   class="form-control"><label>Organization name: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="address" id="address"
                                   placeholder="name@example.com" class="form-control"> <label>Address: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="phone" id="phone"
                                   placeholder="name@example.com"
                                   class="form-control"><label>Phone: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="social_networks"
                                   id="social_networks"
                                   placeholder="name@example.com"
                                   class="form-control"><label>Social networks link: </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="working_hours" id="working_hours"
                                   placeholder="name@example.com"
                                   class="form-control"><label>Working hours: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="unp" id="unp" placeholder="name@example.com"
                                   class="form-control"><label>UNP: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="legal_name" id="legal_name"
                                   placeholder="name@example.com" class="form-control"><label>Legal name: *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="additionally" id="additionally"
                                      cols="300"
                                      rows="130"
                                      placeholder="name@example.com"
                                      class="form-control"></textarea><label>Additionally information: </label>
                        </div>
                        <button type="submit" class="btn btn-success">Add organization</button>
                    </form>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

@endsection
