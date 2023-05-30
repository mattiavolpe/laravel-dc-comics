@extends("layouts.app")

@section("content")
<div class="container py-5">
  <h1 class="text-center text-light mb-5">Editing "{{ $data['comic'] -> title }}" comic</h1>
  <form action="{{ route('comics.update', $data['comic']->id) }}" method="post" class="text-light">
    @csrf
    @method("put")
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Comic title here..." aria-describedby="titleHelper" value="{{ $data['comic'] -> title }}">
      <small id="titleHelper" class="text-muted">Insert comic title</small>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comic description here...">{{ $data['comic'] -> description }}</textarea>
      <small id="descriptionHelper" class="text-muted">Insert comic description</small>
    </div>
    <div class="mb-3 d-flex align-items-center gap-5">
      <img width="100" src="{{ $data['comic'] -> thumb}}" alt="{{ $data['comic'] -> title }} cover image">
      <div class="flex-grow-1">
        <label for="thumb" class="form-label">Cover image</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic cover image path here..." aria-describedby="thumbHelper" value="{{ $data['comic'] -> thumb }}">
        <small id="thumbHelper" class="text-muted">Insert comic cover path</small>
      </div>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" name="price" id="price" class="form-control" placeholder="Comic price here..." aria-describedby="priceHelper" value="{{ $data['comic'] -> price }}">
      <small id="priceHelper" class="text-muted">Insert comic price</small>
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="Comic series here..." aria-describedby="seriesHelper" value="{{ $data['comic'] -> series }}">
      <small id="seriesHelper" class="text-muted">Insert comic series</small>
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale date here..." aria-describedby="sale_dateHelper" value="{{ $data['comic'] -> sale_date }}">
      <small id="sale_dateHelper" class="text-muted">Insert comic sale date</small>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here..." aria-describedby="typeHelper" value="{{ $data['comic'] -> type }}">
      <small id="typeHelper" class="text-muted">Insert comic type</small>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary mx-3">Update</button>
      <button type="reset" class="btn btn-danger mx-3">Reset</button>
    </div>
  </form>
</div>
@endsection