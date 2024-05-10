<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class EmployerIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $institutions = Institution::paginate(15);

        return view('employers.index', compact('institutions'));
    }
}
