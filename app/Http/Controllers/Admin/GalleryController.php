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
        $gallery = Gallery::findOrFail($id);
        $project_id = $gallery->project_id;
        return view('admin.project.gallery.edit', compact('gallery','project_id'));

    }

    public function update($id, GalleryStoreAndUpdateRequest $request)
    {
        $gallery = Gallery::findOrFail($id);
        $path = $gallery->image_path;

        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Gallery::DEFAULT_RESOURCE_DIRECTORY, $path);
        }


        $gallery->update([

            'img_path' => $path,


        ]);
        $this->edited();
        return redirect()->route('gallery.index',['project_id'=>$gallery->project_id]);
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery ) {
            $this->notFound();
            return redirect()->back();
        }

        if ($gallery ->img_path) {
            $this->fileService->remove($gallery ->img_path);
        }
        $gallery->delete();

        $this->deleted();
        return redirect()->back();
    }

}
