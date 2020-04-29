@extends('main')

@section('title', ' | Home')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h1 class="display-4">Octarine, magic world!</h1>
                      <p class="lead">A world of dragons, fairies and mythical animls. </p>
                      <hr class="my-4">
                      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                      <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">Posts</a>
                    </div>
            </div>
        </div>


         <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 350) }}{{ strlen(strip_tags($post->body)) > 350 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@stop