<?php


namespace App\Http\Requests\Web;


use App\Http\Requests\WebBaseRequest;

class BranchStoreAndUpdateRequest extends WebBaseRequest
{
    public function injectedRules(): array
    {
        return [
            'name' => ['required', 'string'],
            'name_in_menu' => ['required', 'string'],
            'description' => ['required', 'string'],
//            'is_visible' => ['required', 'boolean'],


        ];
    }
}
