<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine; // Adjust the model namespace as per your application


class SearchController extends Controller
{
    public function results(Request $request)
    {
        $query = $request->input('query');
    
        // Perform the database query to retrieve the search results
        $results = Medicine::where('commercial_name', 'LIKE', "%$query%")->get();
    
        return view('medicinesearch', compact('results'));
    }
}