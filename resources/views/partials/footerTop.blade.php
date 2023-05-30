<div id="footer_top" class="py-5">
  <div class="container position-relative">
    <div id="footer_links_wrapper" class="d-flex gap-5">
      <div>
        <h4 class="text-uppercase text-white fw-bold my-3">DC COMICS</h4>
        <ul>
          @foreach($data['dcComicsLinks'] as $page)
          <li>
            <a class="text-secondary" href="#">{{ $page->name }}</a>
          </li>
          @endforeach
        </ul>
        <h4 class="text-uppercase text-white fw-bold my-3">SHOP</h4>
        <ul>
          @foreach($data['shopLinks'] as $page)
          <li>
            <a class="text-secondary" href="#">{{ $page->name }}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div>
        <h4 class="text-uppercase text-white fw-bold my-3">DC</h4>
        <ul>
          @foreach($data['dcLinks'] as $page)
          <li>
            <a class="text-secondary" href="#">{{ $page->name }}</a>
          </li>
          @endforeach
        </ul>
      </div>
      <div>
        <h4 class="text-uppercase text-white fw-bold my-3">SITES</h4>
        <ul>
          @foreach($data['siteLinks'] as $page)
          <li>
            <a class="text-secondary" href="#">{{ $page->name }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <p class="text-secondary mt-4 mb-0">
      All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.
    </p>
    <p class="mb-0">
      <a href="#">Cookies Settings</a>
    </p>
    <div id="footer_dc_logo_wrapper">
      <img width="650" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
    </div>
  </div>
</div>
<!-- /#footer_top -->
