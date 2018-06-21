@extends('layout')

@section('content')
    <section id="show">
      <h1 class="my-4">
        {{ $movie->title }}
        <!-- <small>Secondary Text</small> -->
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="http://placehold.it/750x500" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Synopsis</h3>
            <p>{{ $movie->description }}</p>
            
            <h3 class="my-3">Project Details</h3>
            <ul>
                <li>Lorem Ipsum</li>
                <li>Dolor Sit Amet</li>
                <li>Consectetur</li>
                <li>Adipiscing Elit</li>
            </ul>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Dans le même genre ...</h3>

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
@endsection