<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return User::orderByDesc('id')->first();
    }

    public function all()
    {
        return User::all();
    }

}