<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\ProjectStoreAndUpdateRequest;
use App\Models\Category;
use App\Services\FileService;
use App\Utils\StaticConstants;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends WebBaseController
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
        $projects = Project::with('category')->get();
        return view('admin.project.index', compact('projects'));
    }

    public function create() {
        $project = new Project();
        if(!empty($project)) $project = null;
        $categories = Category::all();
        return view('admin.project.create', compact('project', 'categories'));

    }

    public function store(ProjectStoreAndUpdateRequest $request) {
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Project::DEFAULT_RESOURCE_DIRECTORY);
        }

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'img_path' => $path,
            'category_id' => $request->category_id
        ]);
        $this->added();
        return redirect()->route('project.index');
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
        $path = $project->img_path;

        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Project::DEFAULT_RESOURCE_DIRECTORY, $path);
        }


        $project->update([
            'name' => $request->name,
            'img_path' => $path,
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);
        $this->edited();
        return redirect()->route('project.index');
    }

    public function visibleChange($id)
    {

        $project = Project::findOrFail($id);
        if ($project->is_visible) $project->is_visible = false;
        else $project->is_visible = true;
        $project->save();
        $this->edited();
        return redirect()->route('project.index');
    }
}
