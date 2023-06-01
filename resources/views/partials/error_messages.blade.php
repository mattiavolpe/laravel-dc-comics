@if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger alert-dismissible fade show mb-1" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Error:</strong> {{$error}}
  </div>
  @endforeach
@endif
