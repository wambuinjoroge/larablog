@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">


            </nav>
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <form method="post" action="{{url('post/post')}}">
                {{csrf_field()}}
                <h2> Your Post goes here! </h2>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="post_title">Title:</label>
                        <input type="text" class="form-control" name="post_title">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="post_content">Content:</label>
                        <textarea type="text" class="form-control" name="post_content"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="date">Date:</label>
                        <input type="text" class="form-control" name="date">
                    </div>
                </div>
        <div class="row">
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Post</button>
            </div>
        </div>
        </form>
            </main>
        </div>
    </div>
@endsection
