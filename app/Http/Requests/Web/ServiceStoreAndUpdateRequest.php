<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 1.06.2020
 * Time: 03:34
 */

namespace App\Http\Requests\Web;


use App\Http\Requests\WebBaseRequest;

class ServiceStoreAndUpdateRequest extends WebBaseRequest
{
    public function injectedRules(): array
    {

        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'image' => ['image'],
        ];
    }

}