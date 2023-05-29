@extends("layouts.app")

@section("content")
  <div class="container">
    <a name="newComic" id="newComic" class="btn btn-primary my-5" href="{{ route('comics.create') }}" role="button">New Comic</a>
    <div class="table-responsive pb-5">
      <table class="table table-primary m-0">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale date</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($comics as $comic)
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
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
