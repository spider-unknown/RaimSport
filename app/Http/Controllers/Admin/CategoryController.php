<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with('branch')->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create() {
        $category = new Category();
        if(!empty($category)) $category = null;
        $branches = Branch::all();
        return view('admin.category.create', compact('category', 'branches'));

    }

    public function store(Request $request) {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_visible' => 0,
            'img_path' => 'text',
            'branch_id' => $request->branch_id
        ]);
        return redirect()->route('category.index');
    }
}
