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
use App\Models\Project;

class MainController extends WebBaseController
{
    public function index()
    {
        return view('client.index');
    }

    public function services()
    {
        return view('client.services');
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

    public function projectSingle($id) {
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
        return view('client.about');
    }

}
