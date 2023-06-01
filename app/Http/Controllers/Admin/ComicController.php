<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use App\Models\DcComicsLink;
use App\Models\DcLink;
use App\Models\Page;
use App\Models\ShopLink;
use App\Models\SiteBanner;
use App\Models\SiteLink;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "comics" => Comic::orderByDesc('id')->get(),
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view('admin.comics.index', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view('admin.comics.create', compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $valData = $request->validated();        
        Comic::create($valData);
        return to_route('comics.index')->with("message", "Comic $request->title successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            "comic" => $comic,
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view('admin.comics.show', compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic,
            "dcComicsLinks" => DcComicsLink::all(),
            "dcLinks" => DcLink::all(),
            "pages" => Page::all(),
            "shopLinks" => ShopLink::all(),
            "siteBanners" => SiteBanner::all(),
            "siteLinks" => SiteLink::all(),
        ];
        return view("admin.comics.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $valData = $request->validated();        
        $comic->update($valData);
        return to_route("comics.show", $comic -> id)->with("message", "Comic $request->title successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route("comics.index")->with("message", "Comic $comic->title successfully deleted");
    }
}
