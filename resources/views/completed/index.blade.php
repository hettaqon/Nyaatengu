@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card p-4 my-5">
        <span class="pb-4"><h1><b>List Tamat</b></h1></span>
        <div class="row ">            
            @foreach ($manga as $mg)
            <div class="col-4 pb-5">
                <a href="/manga/{{$mg->id}}">
                    <img src="/storage/{{$mg->image}}" class="gambar2">
                </a>
            </div>
            <div class="col-8 pb-5">
                <a href="/manga/{{$mg->id}}">
                    <h1><span style="font-weight: bold">{{$mg->title}}<hr></span></h1></a>
                    <h6>Genre  :<span class='genre'> {{$mg->genre}}<hr></span></h6>
                    <h6>Author  :<span class="author"> {{$mg->author}}<hr></span></h6>
                    <h6>Jumlah Chapter  :<span class='total_chapter'> {{$mg->episode}}<hr></span></h6>
                    <h6>Status  :<span class='status'> {{$mg->status}}<hr><span></h6>
                    <h6>Released :<span class='released'> {{$mg->releases}}<hr></span></h6>
                    <h6>Type  :<span class='type'> {{$mg->type}}</span><hr></h6>
                    <h6>Rating  :<span class='rating'> {{$mg->rating}}<hr></span></h6>
                    <h6>Sinopsis  : {{$mg->description}}</h6><hr>
                        <br>
                
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $manga->links() }}
    </div>
    </div>

</div>
@endsection
