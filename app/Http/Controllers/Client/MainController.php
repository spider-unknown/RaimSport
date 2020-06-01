<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 21.05.2020
 * Time: 01:57
 */

namespace App\Http\Controllers\Client;

use App\Http\Controllers\WebBaseController;
use App\Models\Blog;
use App\Models\Note;
use App\Models\Project;
use App\Models\Service;

class MainController extends WebBaseController
{
    public function index()
    {
        $services = Service::limit(10)->get();
        return view('client.index', compact('services'));
    }

    public function service($id)
    {
        $service = Service::find($id);
        if (!$service) {
            $this->notFound();
            return redirect()->back();
        }
        return view('client.serviceSingle', compact('service'));
    }

    public function services()
    {
        $services = Service::paginate(9);
        return view('client.services', compact('services'));
    }

    public function project()
    {
        $projects = Project::where('is_visible', 1)->with('category')->paginate(12);
        return view('client.project', compact('projects'));
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            $this->notFound();
            return redirect()->back();
        }
        return view('client.blogSingle', compact('blog'));
    }

    public function projectSingle($id)
    {
        $project = Project::where('id', $id)->with('galleries')->first();
        return view('client.projectSingle', compact('project'));
    }

    public function blog()
    {
        $blogs = Blog::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('client.blog', compact('blogs'));
    }

    public function about()
    {
        $services = Service::limit(10)->get();
        $notes = Note::all();
        return view('client.about', compact('services', 'notes'));
    }

}
