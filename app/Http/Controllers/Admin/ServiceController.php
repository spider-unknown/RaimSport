<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Http\Requests\Web\ServiceStoreAndUpdateRequest;
use App\Models\Service;
use App\Services\FileService;
use App\Utils\StaticConstants;


class ServiceController extends WebBaseController
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        $service = new Service();
        return view('admin.service.create', compact('service'));
    }

    public function store(ServiceStoreAndUpdateRequest $request)
    {
        $path = StaticConstants::DEFAULT_IMAGE;
        if ($request->file('image')) {
            $path = $this->fileService->store($request->file('image'), Service::DEFAULT_RESOURCE_DIRECTORY);
        }
        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'img_path' => $path,
        ]);
        return redirect()->route('service.index');
    }


    public function edit($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.service.edit', compact('service'));

    }

    public function update($service_id, ServiceStoreAndUpdateRequest $request)
    {
        $service = Service::find($service_id);
        $path = $service->img_path;
        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), Service::DEFAULT_RESOURCE_DIRECTORY, $path);
        }
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'img_path' => $path,
        ]);
        $this->edited();
        return redirect()->route('service.index');
    }


    public function destroy($service_id)
    {
        $service = Service::find($service_id);
        if (!$service) {
            $this->notFound();
            return redirect()->back();
        }
        if ($service->img_path) {
            $this->fileService->remove($service->img_path);
        }
        $service->delete();
        $this->deleted();
        return redirect()->back();
    }
}
