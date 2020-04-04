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
                      <a class="btn btn-primary btn-lg" href="#" role="button">Posts</a>
                    </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>When Mnet's Open Time Prime Time block was closed they sought a new service to keep viewership of the popular programs in the block up. To do this they would need to be affordable to all families in order to do this. Dstv wanted to launch a scaled down package for low i</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>When Mnet's Open Time Prime Time block was closed they sought a new service to keep viewership of the popular programs in the block up. To do this they would need to be affordable to all families in order to do this. Dstv wanted to launch a scaled down package for low i</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>When Mnet's Open Time Prime Time block was closed they sought a new service to keep viewership of the popular programs in the block up. To do this they would need to be affordable to all families in order to do this. Dstv wanted to launch a scaled down package for low i</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                
            </div>

            <div class="col-md-4 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection

@section('scripts')
<script>
  confirm('I  loaded JS! ');
</script>
@endsection