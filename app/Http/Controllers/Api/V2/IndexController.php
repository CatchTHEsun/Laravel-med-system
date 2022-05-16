<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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

    public function user($id)
    {
        $user = User::find($id);
        if (!$user) return response('', 404);
        return $user;
    }

}