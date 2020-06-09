<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Models\AboutUs;
use App\Services\FileService;
use Illuminate\Http\Request;

class SettingsController extends WebBaseController
{

    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function edit()
    {

        $settings = AboutUs::all();
        $main = $settings->where('type',AboutUs::MAIN)->first();
        $childs = $settings->where('type',AboutUs::CHILD);
        $counts = $settings->where('type',AboutUs::COUNT_CHILD);
        $main_image = $settings->where('type',AboutUs::MAIN_IMAGE)->first();
        $about_us = $settings->where('type',AboutUs::ABOUT_US)->first();

        return view('admin.settings.edit', compact('main','childs','counts', 'main_image', 'about_us'));

    }

    public function update(Request $request)
    {

        $settings = AboutUs::all();
        $main = $settings->where('type',AboutUs::MAIN)->first();
        $childs = $settings->where('type',AboutUs::CHILD);
        $counts = $settings->where('type',AboutUs::COUNT_CHILD);
        $main_image = $settings->where('type',AboutUs::MAIN_IMAGE)->first();
        $about_us = $settings->where('type',AboutUs::ABOUT_US)->first();

        $main->update([
            'title' => $request->input("title"),
            'description' => $request->description,

        ]);

        $about_us->update([
            'title' => $request->input("title".$about_us->id),
            'description' => $request->input("description".$about_us->id),

        ]);

        foreach ($childs as $child) {
            $child->update([
                'title' => $request->input("title".$child->id),
                'description' => $request->input("description".$child->id),

            ]);
        }

        foreach ($counts as $count) {
            $count->update([
                'title' => $request->input("title".$count->id),
                'description' => $request->input("description".$count->id),

            ]);
        }

        $path = $main_image->description;

        if ($request->file('image')) {
            $path = $this->fileService
                ->updateWithRemoveOrStore($request->file('image'), AboutUs::DEFAULT_DIRECTORY, $path);
        }

        $main_image->update([
            'description' => $path,

        ]);
        $this->edited();

        return redirect()->route('settings.edit');
    }
}
