<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContentController extends BaseController
{
    public function index(Request $request)
    {
        return [
            //TODO:コンテンツ詳細を返す
        ];
    }
}
