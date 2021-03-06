@extends('layout')

@section('content')
    <section id="show">
      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="thumbnail-container">
          <!-- <img src="<?php echo asset("storage/app/$movie->image")?>" alt="Avatar" class="thumbnail image" style="width:100%"> -->
          <img src="<?php echo asset($movie->image)?>" alt="Avatar" class="thumbnail image" style="width:100%">
          <div class="middle">
            <a href="#" class="text">
              <span class="icon-play"></span>
              Acheter dès {{ $movie->prix }}&#x20AC;
            </a>
            <a href="#" class="text">
              <span class="icon-play"></span>
              Louer dès {{ $movie->prix * 0.25 }}&#x20AC;
            </a>
          </div>
        </div>

        <div id="detail">
          <h1>
            {{ $movie->title }}
            <small>Action - Aventure - États-Unis - 2018 - 2h15</small>
          </h1>

          <div class="description-categories">
            <div class="description">
                <div class="casting">
                  De:&nbsp;<a href="#">Tim Burton</a><br />
                  <div class="actors">
                    <span>Avec:&nbsp;</span>
                    <ul>
                      <li><a href="#">Chadwick Boseman</a>,&nbsp;</li>
                      <li><a href="#">Michael B Jordan</a>,&nbsp;</li>
                      <li><a href="#">Martin Freeman</a>,&nbsp;</li>
                      <li><a href="#">Lupita Nyong'o</a>,&nbsp;</li>
                      <li><a href="#">Danai Jesekai Gurira</a>,&nbsp;</li>
                      <li><a href="#">Letitia Wright</a></li>
                    </ul>
                  </div>
                </div>

                <p>{{ $movie->description }}</p>
            </div>

            <div class="categories">
                <div>
                    <button class="btn btn-success btn-action video" 
                          data-video="{{ $movie->trailer }}" 
                          data-toggle="modal" 
                          data-target="#videoModal">
                      BA
                    </button>
                </div>

                <h3 class="my-3">Catégories</h3>
                <ul>
                    <li><a href="#">Disney</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Horeur</a></li>
                    <li><a href="#">Aventure</a></li>
                    <li><a href="#">Famille</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <iframe width="100%" height="550" src="" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <!-- Related Projects Row -->
      <section>
        <h3 class="my-4">A voir également</h3>
  
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR88YA8QAd7WyCsyqP3DI8_QP3294Ztf_65xC3ttsNrjxETvQw5qQ" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQve6hS_NUIigSmOSkC_uW1wPpecYJPP9ofg6QgOHcbCHyLYAkpWQ" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBc51Bm3gfG7vYofY6qyzBlNTbIGs6YqbuoM22wtCHq1gpyD8k" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw2HsXXx9YHj1dihI2VoVq73A9XWB-i8UUG3tl-0D4s3Da542JpA" alt="">
            </a>
          </div>
        </div>
      </section>
    </section>
@endsection

@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $(".video").click(function () {
        var theModal = $(this).data("target"),
        videoSRC = $(this).attr("data-video"),
        videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });
  </script>
@endsection