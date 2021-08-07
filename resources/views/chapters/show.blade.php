@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <?php
    foreach ($grouppost as $GroupPost) {
        $allImages = explode("|",$GroupPost->image);
    ?>    
<div class="row justify-content-center">
        @foreach($allImages as $image)
                <img src="/storage/chapterimg/{{$image}}">
        @endforeach
    </div>
<?php } ?>
</div>
@endsection
