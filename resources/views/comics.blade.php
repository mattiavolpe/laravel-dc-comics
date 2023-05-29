@extends('layouts.app')

@section("pageTitle")
Comics
@endsection

@section('content')
  @include("partials/comicsShowcase")
  @include("partials/dcSitesBanner")
@endsection
