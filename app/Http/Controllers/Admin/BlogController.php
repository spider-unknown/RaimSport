<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\BlogStoreAndUpdateRequest;
use App\Models\Blog;
use App\Services\FileService;
use App\Utils\StaticConstants;


class BlogController extends WebBaseController
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $blog = new Blog();
        return view('admin.blog.create', compact('blog'));
    }

    public function store(BlogStoreAndUpdateRequest $request)
    {
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Blog::DEFAULT_RESOURCE_DIRECTORY);
        }
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'img_path' => $path,
            'user_id' => auth()->id()
        ]);
        return redirect()->route('blog.index');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));

    }

    public function update($id, BlogStoreAndUpdateRequest $request)
    {
        $blog = Blog::find($id);
        $path = $blog->img_path;
        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Blog::DEFAULT_RESOURCE_DIRECTORY, $path);
        }
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'img_path' => $path,
        ]);
        $this->edited();
        return redirect()->route('blog.index');
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            $this->notFound();
            return redirect()->back();
        }
        if ($blog->img_path) {
            $this->fileService->remove($blog->img_path);
        }
        $blog->delete();
        $this->deleted();
        return redirect()->back();
    }
}
