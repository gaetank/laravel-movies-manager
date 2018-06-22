@extends('layout')

@section('content') 

<form action="/movies" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="title" class="form-control" placeholder="Le roi lion" />
        @if ($errors->has('title')) 
            <div class="text-danger">{{ $errors->first('title') }}</div>     
        @endif
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        @if ($errors->has('description')) 
            <div class="text-danger">{{ $errors->first('description') }}</div>     
        @endif
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" />
        @if ($errors->has('image')) 
            <div class="text-danger">{{ $errors->first('image') }}</div>     
        @endif
    </div>

    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" class="form-control" name="prix" />
        @if ($errors->has('prix')) 
            <div class="text-danger">{{ $errors->first('prix') }}</div>     
        @endif
    </div>

    <div class="form-group">
        <label for="trailer">Trailer</label>
        <input type="text" class="form-control" name="trailer" placeholder="http://www.trailers.com" value="http://youtube.com" />
        @if ($errors->has('trailer')) 
            <div class="text-danger">{{ $errors->first('trailer') }}</div>     
        @endif
    </div>

    <div class="form-group">
        <label for="realisators">Réalisateur</label>
        <select id="realisators" name="realisators">
            @foreach($realisators as $realisator)
                <option value="{{ $realisator->id }}">{{ $realisator->firstname }} {{ $realisator->lastname }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Enregistrer</button>
    
    </form>
@endsection