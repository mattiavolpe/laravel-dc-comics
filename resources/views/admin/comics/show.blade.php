@extends("layouts.app")

@section("content")
<div class="container py-5">
    
  @if(session("message"))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session("message") }}</strong>
  </div>
  @endif

  <div class="card w-50 mx-auto">
    <div class="card-header">
      <img src="{{ $data['comic'] -> thumb }}" alt="" class="card-img-top">
      <h2>---{{ $data['comic'] -> id }}---<br>{{ $data['comic'] -> title }}</h2>
      <p>{{ $data['comic'] -> description }}</p>
      <h6>Price:
        <span class="fw-normal">{{ $data['comic'] -> price }}</span>
      </h6>
      
      <h6>Series:
        <span class="fw-normal">{{ $data['comic'] -> series }}</span>
      </h6>
      
      <h6>Sale date:
        <span class="fw-normal">{{ $data['comic'] -> sale_date }}</span>
      </h6>
      <h6>Type:
        <span class="fw-normal text-capitalize">{{ $data['comic'] -> type }}</span>
      </h6>
    </div>
  </div>
</div>
@endsection
