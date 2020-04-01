<?php


namespace App\Http\Requests\Web;

use App\Http\Requests\WebBaseRequest;

class CategoryStoreAndUpdateRequest extends WebBaseRequest
{

    public function injectedRules(): array
    {
        return [
            'name' => ['required', 'string'],
            'branch_id' => ['required', 'numeric'],
            'description' => ['required', 'string'],
//            'is_visible' => ['required', 'boolean'],
            'image' => ['image'],

        ];
    }
}


