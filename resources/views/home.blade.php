@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span class="p-4">{{ __('You are logged in!') }}</span>
<div class="row pt-4 justify-content-center">
    <a href="/group/createpost"><button class="btn btn-primary col">Add New Post</button></a>
                    <a href="/manga/addmanga"><button class="btn btn-primary col">Add New Manga</button></a>
</div>
                    

                </div>
            </div>
        </div>
    </div>
    <div class="card p-4 my-5">
        <a href="/manga"><h3><b>List Manga</b></h3></a>
        <div class="row pt-3">            
            @foreach ($manga->take(6) as $mg)
            <div class="col-2 pb-4">
                <a href="/manga/{{$mg->id}}">
                    <img src="/storage/{{$mg->image}}" class="gambar">
                </a>
            </div>
            <div class="col-4">
                <a href="/manga/{{$mg->id}}">
                <p><b>{{$mg->title}}</b></p>
                <p>{{$mg->genre}}</p>
                <p>{{$mg->type}}</p>
                <p>{{$mg->author}}</p>
            </a>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card p-4 mb-5">
        <a href="/ongoing"><h3><b>List Ongoing</b></h3></a>
        <div class="row pt-3">            
            @foreach ($mangaong->take(6) as $mg)
            <div class="col-2 pb-4">
                <a href="/manga/{{$mg->id}}">
                    <img src="/storage/{{$mg->image}}" class="gambar">
                </a>
            </div>
            <div class="col-4">
                <a href="/manga/{{$mg->id}}">
                <p><b>{{$mg->title}}</b></p>
                <p>{{$mg->genre}}</p>
                <p>{{$mg->type}}</p>
                <p>{{$mg->author}}</p>
            </a>
            </div>
            @endforeach
        </div>

    </div>
    <div class="card p-4 mb-5">
        <a href="/completed"><h3><b>List Tamat</b></h3></a>
        <div class="row pt-3">            
            @foreach ($mangacom->take(6) as $mg)
            <div class="col-2 pb-4">
                <a href="/manga/{{$mg->id}}">
                    <img src="/storage/{{$mg->image}}" class="gambar">
                </a>
            </div>
            <div class="col-4">
                <a href="/manga/{{$mg->id}}">
                <p><b>{{$mg->title}}</b></p>
                <p>{{$mg->genre}}</p>
                <p>{{$mg->type}}</p>
                <p>{{$mg->author}}</p>
            </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
