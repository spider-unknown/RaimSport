<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\WebBaseController;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class SettingsController extends WebBaseController
{
    public function edit()
    {

        $main = AboutUs::where('type',AboutUs::MAIN)->first();
        $childs = AboutUs::where('type',AboutUs::CHILD)->get();
        $counts = AboutUs::where('type',AboutUs::COUNT_CHILD)->get();
        return view('admin.settings.edit', compact('main','childs','counts'));

    }

    public function update(Request $request)
    {

        $main = AboutUs::find(1);

        $main->update([
            'description' => $request->description,

        ]);

        $child1 = AboutUs::find(2);

        $child1->update([
            'description' => $request->description2,

        ]);

        $child2 = AboutUs::find(3);

        $child2->update([
            'description' => $request->description3,

        ]);

        $child3 = AboutUs::find(4);

        $child3->update([
            'description' => $request->description4,

        ]);


        $count1 = AboutUs::find(5);

        $count1->update([
            'description' => $request->description5,

        ]);

        $count2 = AboutUs::find(6);

        $count2->update([
            'description' => $request->description6,

        ]);
        $count3 = AboutUs::find(7);

        $count3->update([
            'description' => $request->description7,

        ]);
        $count4 = AboutUs::find(8);

        $count4->update([
            'description' => $request->description8,

        ]);




        $this->edited();

        return redirect()->route('settings.edit');
    }
}
