<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function index() {
        $branches = Branch::all();
        return view('admin.branch.index', compact('branches'));
    }

    public function create() {
        $branch = new Branch();
        if(!empty($branch)) $branch = null;
        return view('admin.branch.create', compact('branch'));
    }

    public function store(Request $request) {
        Branch::create([
            'name' => $request->name,
            'name_in_menu' => $request->name_in_menu,
            'description' => $request->description,
            'is_visible' => 0
        ]);
        return redirect()->route('branch.index');
    }
}
