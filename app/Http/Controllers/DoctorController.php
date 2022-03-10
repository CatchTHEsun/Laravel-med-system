<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $users = Doctor::paginate();
        return view('doctors', compact('users'));
    }
}
