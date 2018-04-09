@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/post/post">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<<<<<<< HEAD
                <h1>Posts
                    <a href="{{ route('post.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                    </a>
                </h1>
                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
=======
                <h1> Welcome {{ Auth::user()->name }} </h1>

                <div class="row">
                    <center>
                    <form>
                            {{csrf_field()}}
                            <h2> POSTS </h2>
                            @foreach($posts as $post)

                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>{{$post['post_title']}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>{{$post['post_content']}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label>{{$post['date']}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <a href="#" class="btn btn-outline-primary btn-md"> Like </a>

                                    <a href="#" class="btn btn-success btn-md" > View Comments </a>

                                    <a href="{{action('CommentController@show', $post['id'])}}" class="btn btn-primary btn-md" > Add Comment </a>
                                </div>
                            </div>
                            @endforeach

                        </form>
                    </center>

                </div>

>>>>>>> 70a6033eb710bb7516f698a6e918d0d069583038
            </main>
        </div>
    </div>
@endsection