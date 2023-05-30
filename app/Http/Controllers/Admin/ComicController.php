<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->title) || empty($request->description) || empty($request->thumb) || empty($request->price)) {
            return to_route('comics.create')->with("message", "Please, fill all the required fields");
        }

        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "thumb" => $request->thumb,
            "price" => $request->price,
            "series" => $request->series,
            "sale_date" => $request->sale_date,
            "type" => $request->type
        ];
        
        Comic::create($data);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        if(empty($request->title) || empty($request->description) || empty($request->thumb) || empty($request->price)) {
            return to_route('comics.index')->with("message", "Please, fill all the required fields");
        }

        $data = [
            "title" => $request -> title,
            "description" => $request -> description,
            "thumb" => $request -> thumb,
            "price" => $request -> price,
            "series" => $request -> series,
            "sale_date" => $request -> sale_date,
            "type" => $request -> type
        ];

        $comic->update($data);
        
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
