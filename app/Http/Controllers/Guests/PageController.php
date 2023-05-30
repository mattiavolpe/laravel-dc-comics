<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\DcComicsLink;
use App\Models\DcLink;
use App\Models\Page;
use App\Models\ShopLink;
use App\Models\SiteBanner;
use App\Models\SiteLink;

class PageController extends Controller
{
    public function index() {
        $data = [
            "comics" => Comic::orderByDesc('id')->get(),
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view("comics", compact("data"));
    }

    public function show($id) {
        $data = [
            "comic" => Comic::where('id', $id)->get(),
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view("singleComic", compact("data"));
    }
}
