<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\costume3dModel;


class ProductController extends Controller
{
    public function homepage()
    {
        $costumes = costume3dModel::all();
        return view('frontend.homepage', compact('costumes'));
    }
}
