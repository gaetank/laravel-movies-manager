@extends('layout')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="title" class="form-control" placeholder="Le roi lion" />
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" />
    </div>

    <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" class="form-control" name="price" />
    </div>

    <div class="form-group">
        <label for="trailer">Trailer</label>
        <input type="text" class="form-control" name="trailer" placeholder="http://www.trailers.com" />
    </div>

    <button class="btn btn-primary">Enregistrer</button>
    
    </form>
@endsection