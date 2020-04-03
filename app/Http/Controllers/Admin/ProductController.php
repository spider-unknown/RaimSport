<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\ProductStoreAndUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\FileService;
use App\Utils\StaticConstants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends WebBaseController
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
        $products = Product::with('category')->get();
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        $product = new Product();
        if(!empty($product)) $product = null;
        $categories = Category::all();
        return view('admin.product.create', compact('product', 'categories'));

    }

    public function store(ProductStoreAndUpdateRequest $request) {
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Product::DEFAULT_RESOURCE_DIRECTORY);
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img_path' => $path,
            'category_id' => $request->category_id
        ]);
        $this->added();
        return redirect()->route('product.index');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));

    }

    public function update($id, ProductStoreAndUpdateRequest $request)
    {
        $product = Product::findOrFail($id);
        $path = $product->img_path;

        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Product::DEFAULT_RESOURCE_DIRECTORY, $path);
        }


        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'img_path' => $path,
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);
        $this->edited();
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product ) {
            $this->notFound();
            return redirect()->back();
        }

        if ($product ->img_path) {
            $this->fileService->remove($product ->img_path);
        }
        $product->delete();

        $this->deleted();
        return redirect()->back();
    }

}
