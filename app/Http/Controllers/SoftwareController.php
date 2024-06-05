<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

      
        $searchResults = Software::where('name', 'like', "%{$keyword}%")
                                 ->orWhere('description', 'like', "%{$keyword}%")
                                 ->paginate(10); 

  
        return view('search-results', compact('searchResults'));
    }
}
