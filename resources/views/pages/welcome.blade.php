@extends('main')

@section('title', ' | Home')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

<style type="text/css">
  .titlemagic {
    font-family: 'Griffy', cursive;
    size: 20px;
  }
  .wsquote {
    font-family: 'Satisfy', cursive;
  }
</style>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h1 class="titlemagic" align="center">Octarine</h1>
                      <hr>
                      <p class="wsquote" align="center">"If this be magic, let it be an art Lawful as eating."</p>
                      <p class="wsquote" align="right"> - "The Winter's Tale", by William Shakespeare </p>
                      <hr>
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