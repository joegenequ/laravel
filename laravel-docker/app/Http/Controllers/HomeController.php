<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = DB::table('categories')->get(); 
 
        return view('home', ['categories' => $allCategories]); 
    }
}
