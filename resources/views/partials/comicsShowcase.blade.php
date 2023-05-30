<div class="container py-5 position-relative text-center">
    <h4 id="page_section" class="text-white bg-primary py-3 px-5 fw-bold">CURRENT SERIES</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-4 text-start" id="comics_showcase">
        @foreach($data['comics'] as $comic)
        <div class="col">
            <div class="card border-0 rounded-0 bg-transparent text-white text-uppercase">
                <a href="{{ route('showComic', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" class="card-img-top"></img>
                    <h6 class="mb-0 fw-normal py-3 text-white">{{ $comic->series }}</h6>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <a id="load_more_comics" class="text-white bg-primary py-2 px-5 fw-bold d-block mt-4" href="#">LOAD MORE</a>
</div>
