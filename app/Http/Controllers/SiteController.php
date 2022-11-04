<?php

namespace App\Http\Controllers;

use App\Http\Resources\SiteResource;
use App\Http\Resources\SiteResourceCollection;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {

        $userId = Auth::user()->id;
        $user = User::find($userId);
        $sites = $user->site;
        $sites = new SiteResourceCollection($sites);

        return view('main', ['sites' => $sites]);
    }

    public function store(SiteResource $request)
    {


    }
}
