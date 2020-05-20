<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 21.05.2020
 * Time: 01:57
 */

namespace App\Http\Controllers\Client;


use App\Http\Controllers\WebBaseController;

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
        return view('client.project');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function blogSingle()
    {
        return view('client.blogSingle');
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function about()
    {
        return view('client.about');
    }

}