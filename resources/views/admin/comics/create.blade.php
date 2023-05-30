@extends("layouts.app")

@section("content")
  <div class="container py-5">
    @if(session("message"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ session("message") }}</strong>
    </div>
    @endif
    <form class="text-white py-5" action="{{ route('comics.store') }}" method="post">
      @csrf
      <div class="mb-3 row">
        <label for="title" class="col-2 col-form-label">Title</label>
        <div class="col-10">
          <input type="text" class="form-control" name="title" id="title" placeholder="Comic title here" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="description" class="col-2 col-form-label">Description</label>
        <div class="col-10">
          <textarea class="form-control" name="description" id="description" placeholder="Comic description here" required></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="thumb" class="col-2 col-form-label">Thumb</label>
        <div class="col-10">
          <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Comic thumb here" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="price" class="col-2 col-form-label">Price ($)</label>
        <div class="col-10">
          <input type="text" class="form-control" name="price" id="price" placeholder="Comic price here" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="series" class="col-2 col-form-label">Series</label>
        <div class="col-10">
          <input type="text" class="form-control" name="series" id="series" placeholder="Comic series here">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sale_date" class="col-2 col-form-label">Sale date (yyyy-mm-dd)</label>
        <div class="col-10">
          <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Comic sale date here">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="type" class="col-2 col-form-label">Type</label>
        <div class="col-10">
          <input type="text" class="form-control" name="type" id="type" placeholder="Comic type here">
        </div>
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
