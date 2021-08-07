@extends('layouts.app')

@section('content')
<div class="container">
<div class="card p-4">
    <div class="title">
        <h3><b>List Manga</b></h3>
        </div>
        <br>
@foreach ($mangaasc as $mg)
<ul class="isi">
    <li class="judul"><a href="/manga/{{$mg->id}}">{{$mg->title}}</a></li>
</ul>
@endforeach
</div>
</div>
@endsection
