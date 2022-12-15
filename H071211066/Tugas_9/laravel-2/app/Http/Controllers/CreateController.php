<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function test(Request $request) {
        return $request;
    }
}
