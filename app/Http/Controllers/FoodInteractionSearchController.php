<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FoodInteraction;
use App\Models\Medicine;



class FoodInteractionSearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
    
        // Perform the search query based on the $searchTerm
        $results = FoodInteraction::whereHas('medicine', function ($query) use ($searchTerm) {
            $query->where('commercial_name', 'like', '%' . $searchTerm . '%');
        })->with('medicine')->get();
    
        return view('foodinteraction')
            ->with('results', $results);
    }


}
