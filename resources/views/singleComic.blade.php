@extends('layouts.app')

@section("pageTitle")
Single Comic
@endsection

@section('content')
  <div id="separator" class="bg-primary py-5">
    <div class="container position-relative">
      <img id="single_comic_image" width="200" src="{{ $data['comic'][0]->thumb }}" alt="Comic image" class="position-absolute bottom-50">
    </div>
  </div>
  @include("partials.comic_details_top")
  @include("partials.comic_details_bottom")
@endsection
