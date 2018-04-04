@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">


            </nav>
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h2> Post Selected </h2>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label>{{$comment['post_title']}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label>{{$comment['post_content']}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label>{{$comment['date']}}</label>
                    </div>
                </div>
                <form method="post" action="{{url('post/comment')}}">
                    {{csrf_field()}}
                    <h2> Add your Comment! </h2>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="comment">Comment:</label>
                            <textarea type="text" class="form-control" name="comment"></textarea>
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
                            <button type="submit" class="btn btn-warning" style="margin-left:38px"> Comment </button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
@endsection
