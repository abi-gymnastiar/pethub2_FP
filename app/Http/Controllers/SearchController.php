<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Example of a basic search. Adjust the query to your needs.
        $results = Animals::where('name', 'LIKE', "%{$query}%") // Adjust 'name' to your searchable field
                            ->orWhere('desc', 'LIKE', "%{$query}%") // Add more conditions as necessary
                            ->orWhere('breed', 'LIKE', "%{$query}%")
                            ->orWhere('age', 'LIKE', "%{$query}%")
                            ->get();
        
        return view('search_results', compact('results'));
    }
}
