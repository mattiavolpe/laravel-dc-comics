<div id="comic_details_top" class="py-5 bg-white">
  <div class="container">
    <h3 class="text-uppercase mb-0">{{ $data['comic'][0]->title }}</h3>
    <div id="price_availability" class="d-flex justify-content-between align-items-center text-white fw-bold my-4">
      <div class="mx-4 py-3">
        <span class="text-success">U.S. Price:</span> {{ $data['comic'][0]->price }}
      </div>
    </div>
    <p class="mb-0">{{ $data['comic'][0]->description }}</p>
  </div>
</div>
