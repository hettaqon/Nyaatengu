@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row content d-flex py-4 bg-dark">
        
          <div class="col">
            <img src="/storage/{{ $manga->image }}" width="400" height="600" alt="poster">
          </div>
          <div class="col">
            <h1><span style="font-weight: bold">{{$manga->title}}<hr></span></h1>
            <h6>Genre  :<span class='genre'> {{$manga->genre}}<hr></span></h6>
            <h6>Author  :<span class="author"> {{$manga->author}}<hr></span></h6>
            <h6>Jumlah Chapter  :<span class='total_chapter'> {{$manga->episode}}<hr></span></h6>
            <h6>Status  :<span class='status'> {{$manga->status}}<hr><span></h6>
            <h6>Released :<span class='released'> {{$manga->releases}}<hr></span></h6>
            <h6>Type  :<span class='type'> {{$manga->type}}</span><hr></h6>
            <h6>Rating  :<span class='rating'> {{$manga->rating}}<hr></span></h6>
            <h6>Sinopsis  :</h6><hr>
              <h6 class='deskripsi'> {{$manga->description}}</h6>
          </div>
        
      </div>
      <div class="card row p-4">
        <h1>Chapter List</h1>
        @foreach ($grouppost as $mg)
        <ul class="isi">
            <li class="judul"><a href="/chapter/{{$mg->id}}">{{$mg->chapter}}</a></li>
        </ul>
        @endforeach
      </div>
</div>
@endsection
