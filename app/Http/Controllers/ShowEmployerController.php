<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class ShowEmployerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $institution = Institution::where('slug', $slug)->firstOrFail();
        $query = $institution->adverts();
        $adverts = $query->paginate(15);
        return view('employers.show', compact('institution', 'adverts'));
    }
}
