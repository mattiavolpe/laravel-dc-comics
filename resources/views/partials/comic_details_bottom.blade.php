<div id="comic_details_bottom" class="py-5">
  <div class="container">
      <div>
        <h5>Specs</h5>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">Series:</span>
          <span class="text-primary text-uppercase">{{ $data['comic'][0]->series }}</span>
        </div>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">U.S. Price:</span>
          <span>{{ $data['comic'][0]->price }}</span>
        </div>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">On Sale Date:</span>
          <span>{{ date_format(date_create($data['comic'][0]->sale_date), "M d Y") }}</span>
        </div>
        <hr class="border-secondary">
      </div>
  </div>
</div>
