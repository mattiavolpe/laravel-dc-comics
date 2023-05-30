<nav>
  <ul id="links" class="d-flex justify-content-center align-items-center gap-4">
    @foreach($data['pages'] as $page)
    <li class="text-uppercase fw-bold border-primary {{ Route::currentRouteName() === $page->name ? 'link_active' : ''}}">
      <a href="{{ route($page->name) }}" class="text-black">{{ $page->name }}</a>
    </li>
    @endforeach
  </ul>
</nav>
