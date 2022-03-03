<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fullness;

class IndexController extends Controller
{
    public function index()
    {
        return Fullness::all();
    }
}
