<?php

namespace App\Http\Controllers;

use App\Models\costumeTable;
use App\Models\customerTable;
use Illuminate\Http\Request;
use App\Models\costume3dModel;


class ProductController extends Controller
{
    public function homepage()
    {
        $costumes = costumeTable::with('images')->get();
        return view('frontend.homepage', compact('costumes'));
    }

    public function productOverview($id)
    {
        $overview = costumeTable::with('images', 'model3d')->findOrFail($id);
        return view('frontend.productOverview', compact('overview'));
    }
    
}