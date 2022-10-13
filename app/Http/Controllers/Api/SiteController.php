<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Resources\SiteResource;
use App\Http\Resources\SiteResourceCollection;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return SiteResourceCollection
     */
    public function index()
    {

        $site = Site::all();
        return new SiteResourceCollection($site);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return SiteResource
     */
    public function store(StoreSiteRequest $request)
    {

        $site = Site::create($request->all());


        return new SiteResource($site);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return SiteResource
     */
    public function update(StoreSiteRequest $request, Site $site)
    {
        $site->update($request->all());


        return new SiteResource($site);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return SiteResource
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return new SiteResource($site);
    }

}
