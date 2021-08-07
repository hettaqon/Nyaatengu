@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card py-5">
    <form action="/manga" enctype="multipart/form-data" method="POST">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row pb-4">
                    <h1>Add New Manga</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @if($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                        @if($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>
                    <div class="col-md-6">
                    <input type="file" class="form-control-file" id="image" name="image">

                        @if($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="genre" class="col-md-4 col-form-label">Genre</label>
                    <div class="col-md-6">
                        <input id="genre" genre="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>

                        @if($errors->has('genre'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('genre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label">Type</label>
                    <div class="col-md-6">
                        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                        @if($errors->has('type'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="author" class="col-md-4 col-form-label">Author</label>
                    <div class="col-md-6">
                        <input id="author" author="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                        @if($errors->has('author'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label">Status (Ongoing/Completed)</label>
                    <div class="col-md-6">
                        <input id="status" status="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>

                        @if($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="releases" class="col-md-4 col-form-label">Releases</label>
                    <div class="col-md-6">
                        <input id="releases" releases="text" class="form-control @error('releases') is-invalid @enderror" name="releases" value="{{ old('releases') }}" required autocomplete="releases" autofocus>

                        @if($errors->has('releases'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('releases') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-md-4 col-form-label">Rating</label>
                    <div class="col-md-6">
                        <input id="rating" rating="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                        @if($errors->has('rating'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('rating') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="episode" class="col-md-4 col-form-label">Episode</label>
                    <div class="col-md-6">
                        <input id="episode" episode="text" class="form-control @error('episode') is-invalid @enderror" name="episode" value="{{ old('episode') }}" required autocomplete="episode" autofocus>

                        @if($errors->has('episode'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('episode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row pt-4 justify-content-center">
                    <button class="btn btn-primary">Add New Manga</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
