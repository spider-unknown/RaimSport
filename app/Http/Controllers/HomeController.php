<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');

        $projectsCount = Project::all()->count();
        $categoriesCount = Category::all()->count();
        $productsCount = Product::all()->count();
        $branchesCount = Branch::all()->count();
        return view('admin.tables', compact(
            'productsCount',
            'projectsCount',
            'categoriesCount',
            'branchesCount'
        ));
    }

    public function welcome()
    {
        return view('client.index');
    }
}
