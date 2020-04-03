<?php

namespace App\Http\Controllers\Admin;
use App\Services\FileService;
use App\Models\Branch;
use App\Models\Category;
use App\Utils\StaticConstants;
use Illuminate\Http\Request;
use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\CategoryStoreAndUpdateRequest;



class CategoryController extends WebBaseController
{
    protected $fileService;
//
//    /**
//     * BannerController constructor.
//     * @param $fileService
//     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }


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

    public function store(CategoryStoreAndUpdateRequest $request) {
//        dd($request->file('image'));
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Category::DEFAULT_RESOURCE_DIRECTORY);
        }

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_visible' => 0,
            'img_path' => $path,
            'branch_id' => $request->branch_id
        ]);
        $this->added();
        return redirect()->route('category.index');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $branches = Branch::all();
        return view('admin.category.edit', compact('category', 'branches'));

    }

    public function update($id, CategoryStoreAndUpdateRequest $request)
    {
        $category = Category::findOrFail($id);
        $path = $category->image_path;
        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Category::DEFAULT_RESOURCE_DIRECTORY, $path);
        }


        $category->update([
            'name' => $request->name,
            'img_path' => $path,
            'branch_id' => $request->branch_id,
            'description' => $request->description,
        ]);
        $this->edited();
        return redirect()->route('category.index');
    }

    public function visibleChange($id)
    {

        $category = Category::findOrFail($id);
        if ($category->is_visible) $category->is_visible = false;
        else $category->is_visible = true;
        $category->save();
        $this->edited();
        return redirect()->route('category.index');
    }
}
