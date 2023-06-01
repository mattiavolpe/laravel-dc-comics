@extends("layouts.app")

@section("content")
  <div class="container py-5">
    @include("partials.error_messages")
    @if(session("message"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ session("message") }}</strong>
    </div>
    @endif
    <form class="text-light py-5" action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Comic title here" value="{{ old('title') }}">
        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Comic description here">{{ old('description') }}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="Comic thumb here" value="{{ old('thumb') }}">
        @error('thumb')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price ($)</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Comic price here" value="{{ old('price') }}">
        @error('price')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="Comic series here" value="{{ old('series') }}">
        @error('series')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date (yyyy-mm-dd)</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="Comic sale date here" value="{{ old('sale_date') }}">
        @error('sale_date')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Comic type here" value="{{ old('type') }}">
        @error('type')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div>
        <div class="text-center d-flex justify-content-center align-items-center">
          <button type="submit" class="btn btn-primary mx-3">Insert new comic</button>
          <button type="reset" class="btn btn-danger mx-3">Reset</button>
        </div>
      </div>
    </form>
  </div>
@endsection
