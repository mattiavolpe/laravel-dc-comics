@extends("layouts.app")

@section("content")
  <div class="container">
    <a name="newComic" id="newComic" class="btn btn-primary my-5" href="{{ route('comics.create') }}" role="button">New Comic</a>

    @if(session("message") && session("message") != "Please, fill all the required fields")
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ session("message") }}</strong>
    </div>
    @elseif(session("message"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ session("message") }}</strong>
    </div>
    @endif

    <div class="table-responsive pb-5">
      <table class="table table-primary m-0 align-middle text-center">
        <thead>
          <tr class="align-middle">
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col" class="itemDate">Sale date</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data['comics'] as $comic)
          <tr class="">
            <td scope="row">{{$comic->id}}</td>
            <td width="15%">
              <img class="img-fluid" src="{{$comic->thumb}}" alt="">
            </td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td class="text-center">
              <a href="{{ route('comics.show', $comic->id) }}">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <a href="{{ route('comics.edit', $comic->id) }}">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
              <a href="#">
                <i class="fa-regular fa-trash-can"></i>
              </a>
            </td>
          </tr>
          @include("partials.deletionModal")
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
