@extends('layouts.app')

@section('content')
    <div class="contaner">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3 mb-3 shadow">
                    <div class="card-header shadow text-center bg-primary"><b style="font-size: 25px">{{ __('Applcation form') }}</b></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ url("category/store") }}" enctype="multipart/form-data">
                            @csrf
    
                            {{-- title --}}
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- content --}}
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('content') }}</label>
                                <div class="col-md-6">
                                    <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- category --}}
                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                                <div class="col-md-6">
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Image --}}
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required value="{{ old('image') }}">
    
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button class="btn btn-primary">Save post</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection