@extends("layouts.app")

@section("content")
<div class="container py-5">
  <h1 class="text-center text-light mb-5">Editing "{{ $data['comic'] -> title }}" comic</h1>
  @include("partials.error_messages")
  <form action="{{ route('comics.update', $data['comic']->id) }}" method="post" class="text-light">
    @csrf
    @method("put")
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Comic title here..." value="{{ old('title', $data['comic'] -> title) }}">
      @error('title')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comic description here...">{{ old('description', $data['comic'] -> description) }}</textarea>
      @error('description')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="mb-3 d-flex align-items-center gap-5">
      <img width="100" src="{{ $data['comic'] -> thumb}}" alt="{{ $data['comic'] -> title }} cover image">
      <div class="flex-grow-1">
        <label for="thumb" class="form-label">Cover image</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic cover image path here..." value="{{ old('thumb', $data['comic'] -> thumb) }}">
        @error('thumb')
        <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price ($)</label>
      <input type="text" name="price" id="price" class="form-control" placeholder="Comic price here..." value="{{ old('price', $data['comic'] -> price) }}">
      @error('price')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="Comic series here..." value="{{ old('series', $data['comic'] -> series) }}">
      @error('series')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale date here..." value="{{ old('sale_date', $data['comic'] -> sale_date) }}">
      @error('sale_date')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here..." value="{{ old('type', $data['comic'] -> type) }}">
      @error('type')
      <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary mx-3">Update</button>
      <button type="reset" class="btn btn-danger mx-3">Reset</button>
    </div>
  </form>
</div>
@endsection
