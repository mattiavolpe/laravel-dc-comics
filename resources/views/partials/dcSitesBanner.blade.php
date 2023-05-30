<div id="dc_sites_banner" class="bg-primary py-5">
    <div class="container d-flex justify-content-between align-items-center text-white">
        @foreach($data['siteBanners'] as $site)
        <div class="d-flex align-items-center gap-4">
            <img height="50" src="{{ Vite::asset('resources/img/' . $site->image) }}" alt="DIGITAL COMICS">
            <span class="text-uppercase">{{ $site->name }}</span>
        </div>
        @endforeach
    </div>
</div>
