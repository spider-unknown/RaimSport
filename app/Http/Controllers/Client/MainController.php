<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 21.05.2020
 * Time: 01:57
 */

namespace App\Http\Controllers\Client;

use App\Http\Controllers\WebBaseController;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Note;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class MainController extends WebBaseController
{
    public function index()
    {
        $services_all = Service::all();
        $projects = Project::where('is_visible', true)->limit(8)->get();
        $notes = Note::orderBy('created_at', 'desc')->limit(5)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        $settings = AboutUs::all();
        $main = $settings->where('type',AboutUs::MAIN)->first();
        $childs = $settings->where('type',AboutUs::CHILD);
        $counts = $settings->where('type',AboutUs::COUNT_CHILD);

        return view('client.index', compact('projects', 'services_all', 'notes', 'blogs',
            'main', 'childs', 'counts'));
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

    public function sendTelegram(Request $request)
    {
        $name = 'Имя: ' . $request->name;
        $email = 'Почта: ' . $request->email;
        $date = 'Дата: ' . $request->date . ' ' . $request->time;
        $extra = 'Дополнительно: ' . $request->comment;
        $phone = 'Телефон: ' . $request->phone;
        $service = 'Услуга: ' . $request->service;

        $message = $service . "\n" . $name . "\n" . $email . "\n" . $date . "\n" . $phone . "\n" . $extra . "\n";
        Telegram::sendMessage([
            'chat_id' => '-1001322675781',
            'parse_mode' => 'HTML',
            'text' => $message
        ]);
        $this->makeToast('success', 'Ваша заявка отправлена! Ожидайте обратной связи!');
        return redirect()->route('client.index');
    }

    public function sendTelegramTheme(Request $request)
    {
        $name = 'Имя: ' . $request->name;
        $email = 'Почта: ' . $request->email;
        $extra = 'Дополнительно: ' . $request->comment;
        $theme = 'Тема: ' . $request->theme;
        $phone = 'Телефон: ' . $request->phone;

        $message = $theme . "\n" . $name . "\n" . $email . "\n" . $phone . "\n" . $extra . "\n";
        Telegram::sendMessage([
            'chat_id' => '-1001322675781',
            'parse_mode' => 'HTML',
            'text' => $message
        ]);
        $this->makeToast('success', 'Ваша заявка отправлена! Ожидайте обратной связи!');
        return redirect()->back();
    }

    public function botTest()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
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

        $about_us = AboutUs::where('type',AboutUs::ABOUT_US)->first();
        return view('client.about', compact('about_us'));
    }

    public function shop(Request $request)
    {
        $categoryId = $request->input('categoryId');
        $categories = Category::where('is_visible', true)->get();
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->paginate(9);
        } else {
            $products = Product::paginate(9);
        }
        return view('client.shop', compact('products', 'categories', 'categoryId'));
    }

    public function itemSingle($id)
    {
        $product = Product::with('category')->find($id);
        if (!$product) {
            $this->notFound();
            return redirect()->back();
        }
        return view('client.itemSingle', compact('product'));
    }

    public function branch($id, Request $request) {
        $branch = Branch::where('id', $id)->where('is_visible', true)->first();
        $categories = $branch->categories;
        $currentCategory = null;
        $categoryId = null;
        $projects = array();
        if($request->categoryId) {
            $categoryId = $request->categoryId;
            $currentCategory =  $categories->where('id', $categoryId)->first();
            $projects = Project::where('category_id', $categoryId)->where('is_visible', true)->get();
        }
        return view('client.branch', compact('categories', 'branch', 'currentCategory', 'categoryId', 'projects'));
    }
}
