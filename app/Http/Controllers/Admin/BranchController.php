<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\Web\BranchStoreAndUpdateRequest;


class BranchController extends WebBaseController
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

    public function store(BranchStoreAndUpdateRequest $request) {
        Branch::create([
            'name' => $request->name,
            'name_in_menu' => $request->name_in_menu,
            'description' => $request->description,
            'is_visible' => 0
        ]);
        return redirect()->route('branch.index');
    }


    public function edit($id)
    {
        $branch = Branch::findOrFail($id);

        return view('admin.branch.edit', compact('branch'));

    }

    public function update($id, BranchStoreAndUpdateRequest $request)
    {
        $branch = Branch::findOrFail($id);

        $branch->update([
            'name' => $request->name,
            'name_in_menu' => $request->name_in_menu,
            'is_visible' => false,
            'description' => $request->description,

        ]);
        $this->edited();
        return redirect()->route('branch.index');
    }

    public function visibleChange($id)
    {

        $category = Branch::findOrFail($id);
        if ($category->is_visible) $category->is_visible = false;
        else $category->is_visible = true;
        $category->save();
        $this->edited();
        return redirect()->route('branch.index');
    }
}
