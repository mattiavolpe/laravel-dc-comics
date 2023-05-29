<nav>
  <ul id="links" class="d-flex justify-content-center align-items-center gap-4">
    @foreach($db["pages"] as $page)
    <li class="text-uppercase fw-bold border-primary {{ Route::currentRouteName() === $page ? 'link_active' : ''}}">
      <a href="{{ route($page) }}" class="text-black">{{ $page }}</a>
    </li>
    @endforeach
  </ul>
</nav>
