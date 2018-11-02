<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends BaseController
{
    public function index(Request $request)
    {
        $content = Content::getContent();
        return $content;
    }
}
