<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 1.06.2020
 * Time: 03:34
 */

namespace App\Http\Requests\Web;


use App\Http\Requests\WebBaseRequest;

class NoteStoreAndUpdateRequest extends WebBaseRequest
{
    public function injectedRules(): array
    {

        return [
            'full_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ];
    }

}