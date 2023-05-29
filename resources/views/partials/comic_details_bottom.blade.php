<div id="comic_details_bottom" class="py-5">
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-2 g-5">
      <div class="col">
        <h5>Talent</h5>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">Art by:</span>
          <span class="text-primary">
            @foreach($db["comics"][0]["artists"] as $index => $artist)
              @if($index < count($db["comics"][0]["artists"]) - 1)
                {{ $artist . ", "}}
              @else
                {{ $artist}}
              @endif
            @endforeach
          </span>
        </div>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">Written by:</span>
          <span class="text-primary">
            @foreach($db["comics"][0]["writers"] as $index => $writer)
              @if($index < count($db["comics"][0]["writers"]) - 1)
                {{ $writer . ", "}}
              @else
                {{ $writer}}
              @endif
            @endforeach
          </span>
        </div>
        <hr class="border-secondary">
      </div>
      <div class="col">
        <h5>Specs</h5>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">Series:</span>
          <span class="text-primary text-uppercase">{{ $db["comics"][0]["series"] }}</span>
        </div>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">U.S. Price:</span>
          <span>{{ $db["comics"][0]["price"] }}</span>
        </div>
        <hr class="border-secondary">
        <div class="d-flex">
          <span class="w-25 flex-shrink-0">On Sale Date:</span>
          <span>{{ date_format(date_create($db["comics"][0]["sale_date"]), "M d Y") }}</span>
        </div>
        <hr class="border-secondary">
      </div>
    </div>
  </div>
</div>
