@extends('layout')

@section('content')
    <section id="home" class="row">
        <div class="col-lg-3">
            <h1 class="my-4">Nos films</h1>
            <div class="list-group">
                <a href="#" class="list-group-item">Action</a>
                <a href="#" class="list-group-item">Comédie</a>
                <a href="#" class="list-group-item">Horeur</a>
            </div>
        </div>

        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://img.over-blog-kiwi.com/1/21/25/91/20151010/ob_0e83c0_key-art-scary-movie-2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://g4p.com.au/wp-content/uploads/2017/04/20170426-MM-GuardiansGalaxy-FB-900x350.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://images2.houstonpress.com/imager/u/original/6395122/key_art_live_free_or_die_hard.jpg" alt="Third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="{{ route('movies.show', ["id" => $movie->price]) }}">
                                <img class="card-img-top" src="{{ $movie->imageUrl }}" alt="">
                            </a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                <a href="{{ route('movies.show', ["id" => $movie->price]) }}">{{ $movie->title }}</a>
                                </h4>
                                <h5>{{ $movie->price }}&#x20AC;</h5>
                                <p class="card-text">
                                    {{ $movie->description }}
                                </p>
                            </div>

                            <div class="card-footer">
                                <small class="text-muted">
                                    &#9733; &#9733; &#9733; &#9733; &#9734;
                                </small>
                                <button class="btn btn-primary" href="{{ route('movies.show', ["id" => $movie->price]) }}">Purchase</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection