@extends("layouts.app")

@section("content")
<div class="container py-5">
  <div class="card w-50 mx-auto">
    <div class="card-header">
      <img src="{{ $comic -> thumb }}" alt="" class="card-img-top">
      <h2><--{{ $comic -> id }}--&gt;: {{ $comic -> title }}</h2>
      <p>{{ $comic -> description }}</p>
      <h6>Price:
        <span class="fw-normal">{{ $comic -> price }}</span>
      </h6>
      
      <h6>Series:
        <span class="fw-normal">{{ $comic -> series }}</span>
      </h6>
      
      <h6>Sale date:
        <span class="fw-normal">{{ $comic -> sale_date }}</span>
      </h6>
      <h6>Type:
        <span class="fw-normal text-capitalize">{{ $comic -> type }}</span>
      </h6>
    </div>
  </div>
</div>
@endsection
