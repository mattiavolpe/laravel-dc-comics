<header id="app_header">
  @include("partials.topHeader")

  <div id="header_links">
    <div class="container d-flex justify-content-between align-items-center">
      <div id="logo_wrapper">
        <img height="80" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </div>
      @include("partials.headerLinks")
      <div id="search_wrapper" class="position-relative">
        <input type="search" placeholder="Search" name="searchComics" id="searchComics" class="border-primary">
        <i class="fa-solid fa-magnifying-glass fa-fw" id="searchIcon"></i>
      </div>
    </div>
  </div>
  <!-- /#header_links -->
</header>
<!-- /#app_header -->
