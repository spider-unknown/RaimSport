<?php


namespace App\Http\Requests\Web;


use App\Http\Requests\WebBaseRequest;

class GalleryStoreAndUpdateRequest extends WebBaseRequest
{
    public function injectedRules(): array
    {
        return [

            'image' => ['image'],

        ];
    }
}
