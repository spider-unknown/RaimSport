<?php


namespace App\Http\Requests\Web;


use App\Http\Requests\WebBaseRequest;

class ProductStoreAndUpdateRequest extends WebBaseRequest
{
    public function injectedRules(): array
    {
        return [
            'name' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'image' => ['image'],

        ];
    }
}
