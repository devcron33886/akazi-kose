<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $advert = Advert::where('slug', $slug)->firstOrFail();

        return view('adverts.show', compact('advert'));
    }
}
