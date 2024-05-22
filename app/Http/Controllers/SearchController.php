<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $animals = Animals::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('animals.index', ['animals' => $animals]);
    }
}
