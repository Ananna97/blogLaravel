@extends('main')

@section('title', ' | Home Admin')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  
<style type="text/css">
  .titlemagic {
    font-family: 'Griffy', cursive;
    size: 50px;
  }
  .wsquote {
    font-family: 'Satisfy', cursive;
    font-size: 30px;
  }
</style>
        <div class="row">
            <div class="col-md-8" style="max-width: 775px">
              
                  <div class="jumbotron">
                        <h1 class="titlemagic" align="center"style="margin-top: 150px;">Octarine - ADMIN</h1>
                        <p class="wsquote" align="center">"If this be magic, let it be an art Lawful as eating."</p>
                        <p class="wsquote" align="right"> - "The Winter's Tale", by William Shakespeare </p>
                  </div>
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 350) }}{{ strlen(strip_tags($post->body)) > 350 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}"  id="submitButton" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

            <div class="col-md-4" style="max-width: 100px; text-align: center; margin-left: 100px;">
                  <h2 style="margin-bottom: -80px; margin-left: 80px">Discover</h2>
                  <a class="navbar-brand bestImg" href="http://bestfantasybooks.com/top25-fantasy-books.php"><img class="octicon" src="../../images/best/best_books.png" title="Best Fantasy BOOKS" alt="Fantasy BOOKS"></a>
                  <a class="navbar-brand bestImg" href="https://www.imdb.com/search/title/?genres=fantasy"><img class="octicon" src="../../images/best/best_movies.png" title="Best Fantasy MOVIES" alt="Fantasy MOVIES"></a>
                  <a class="navbar-brand bestImg" href="https://www.youtube.com/watch?v=tUVqnXD4C5U&list=RDQM-QEi27SkNNQ&start_radio=1"><img class="octicon" src="../../images/best/best_music.png" title="Fantasy MUSIC" alt="Fantasy MUSIC"></a>
                  <a class="navbar-brand bestImg" href="https://myanimelist.net/anime/genre/10/Fantasy"><img class="octicon" src="../../images/best/best_anime.png" title="Best Fantasy ANIME" alt="Best Fantasy ANIME"></a>
                  <a class="navbar-brand bestImg" href="https://www.ranker.com/list/all-fantasys-list/reference"><img class="octicon" src="../../images/best/best_game.png" title="Best Fantasy GAMES" alt="Best Fantasy GAMES"></a>
            </div>

        </div>
@stop