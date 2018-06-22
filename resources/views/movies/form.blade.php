@extends('layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>
            Oops, we are unable to save your movie because of the following error(s):
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        <strong>
    </div>
    @endif    

<form action="{{ route('movies.postform') }}" method="post" enctype="multipart/form-data">

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
        <input type="number" class="form-control" name="prix" />
    </div>

    <div class="form-group">
        <label for="trailer">Trailer</label>
        <input type="text" class="form-control" name="trailer" placeholder="http://www.trailers.com" value="http://youtube.com" />
    </div>

    @if(!empty($realisators) && count($realisators) > 0)
        <div class="form-group">
            <label for="realisator">Réalisateur</label>
            <select id="realisators" name="realisators">
                @foreach($realisators as $realisator)
                    <option value="{{ $realisator->id }}">{{ $realisator->firstname }} {{ $realisator->lastname }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <button class="btn btn-primary">Enregistrer</button>
    
    </form>
@endsection