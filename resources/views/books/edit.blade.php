@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') . ': ' . $books->title }}</div>
                <div class="card-body">
                    <form method="POST" action="/books/{{ $books->id }}/edit">
                        @csrf

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{ $books->isbn }}" required autocomplete="isbn" autofocus>

                                @error('isbn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $books->title }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-6">
                                <input id="author" type="author" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $books->author }}" required autocomplete="author">

                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keywords" class="col-md-4 col-form-label text-md-right">{{ __('Keywords') }}</label>

                            <div class="col-md-6">
                                <input id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{ $books->keywords }}" autocomplete="keywords" autofocus>

                                @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blurb" class="col-md-4 col-form-label text-md-right">{{ __('Blurb') }}</label>

                            <div class="col-md-6">
                                <input id="blurb" type="text" class="form-control @error('blurb') is-invalid @enderror" name="blurb" value="{{ $books->blurb }}" autocomplete="blurb" autofocus>

                                @error('blurb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-md-4 col-form-label text-md-right">{{ __('Release Date') }}</label>

                            <div class="col-md-6">
                                <input id="release_date" type="text" class="form-control @error('release_date') is-invalid @enderror" name="release_date" value="{{ $books->release_date }}" autocomplete="release_date" autofocus>

                                @error('release_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" action="/books/{{ $books->id }}/delete" class="btn btn-danger">
                                    {{ __('Delete') }}
                                </button>
                            </div>
                        </div> -->
                        <a href="/books/{{ $books->id }}/delete">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
