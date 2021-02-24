<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'succes' => true,
            'data' => Category::all(),
        ], 200);
    }
}
