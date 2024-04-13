<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\IllnessInteraction;

class IllnessInteractionSearchController extends Controller
{
    //
    public function Illnesssearch(Request $request)
{
    $searchTerm = $request->input('search');

    // Perform the search query based on the $searchTerm
    $results = IllnessInteraction::whereHas('medicine', function ($query) use ($searchTerm) {
        $query->where('commercial_name', 'like', '%' . $searchTerm . '%');
    })->with('medicine')->get();

    return view('illnessinteraction')
        ->with('results', $results);
}
}
