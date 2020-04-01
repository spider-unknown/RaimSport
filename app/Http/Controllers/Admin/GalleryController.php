<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\GalleryStoreAndUpdateRequest;
use App\Models\Gallery;
use App\Services\FileService;
use App\Utils\StaticConstants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends WebBaseController
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


    public function index($project_id) {
        $galleries = Gallery::where('project_id', $project_id)->get();

        return view('admin.project.gallery.index', compact('galleries','project_id'));
    }

    public function create($project_id) {
        $gallery = new Gallery();
//        if(!empty($project)) $project = null;

        return view('admin.project.gallery.create', compact('gallery', 'project_id'));

    }

    public function store(GalleryStoreAndUpdateRequest $request,$project_id) {
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Gallery::DEFAULT_RESOURCE_DIRECTORY);
        }

        Gallery::create([
            'img_path' => $path,
            'project_id' => $project_id
        ]);
        $this->added();
        return redirect()->route('gallery.index',['project_id'=>$project_id]);
    }


    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::all();
        return view('admin.project.edit', compact('project', 'categories'));

    }

    public function update($id, ProjectStoreAndUpdateRequest $request)
    {
        $project = Project::findOrFail($id);
        $path = $project->image_path;
        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Category::DEFAULT_RESOURCE_DIRECTORY, $path);
        }


        $project->update([
            'name' => $request->name,
            'image_path' => $path,
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);
        $this->edited();
        return redirect()->route('project.index');
    }

}
