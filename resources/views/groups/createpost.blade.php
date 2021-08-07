@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4">
    <form action="/chapter" enctype="multipart/form-data" method="POST">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    
                    <select name="title" id="title" class="form-control">
                        <option value="">== Select Title ==</option>
                        @foreach ($manga as $id => $title)
                            <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                    </select>

                        @if($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group row">
                    <label for="chapter" class="col-md-4 col-form-label">Chapter</label>
                    
                        <input id="chapter" type="text" class="form-control @error('chapter') is-invalid @enderror" name="chapter" value="{{ old('chapter') }}" required autocomplete="chapter" autofocus>

                        @if($errors->has('chapter'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('chapter') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image[]" multiple>
                @if($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                @endif
                </div>

                <div class="row pt-4 justify-content-center">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
