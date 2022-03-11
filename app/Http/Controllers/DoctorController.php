<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Requests\PatientRequest;

class DoctorController extends Controller
{
    public function index()
    {
        $users = Doctor::paginate();
        return view('doctors', compact('users'));
    }

    public function create()
    {
        return view('doctors_form');
    }

    public function store(PatientRequest $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'profession'=>'required',
            'image' =>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $imageForSave = time() . '-' . $request->name . '.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageForSave);

        Doctor::create([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'email' => $request->input('email'),
            'image_path' => $imageForSave,
        ]);
        return redirect()->route('doctors.index')->withSuccess('Created doctor ' .$request->name);
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors_form', compact('doctor'));
    }

    public function update(PatientRequest $request, Doctor $doctor)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'image' =>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $imageForSave = time() . '-' . $request->name . '-' . random_int(-10000, 0). '.' .$request->image->extension();
        $request->image->move(public_path('images'), $imageForSave);

        Doctor::where('name', $doctor->name)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'image_path' => $imageForSave,
            ]);
        return redirect()->route('doctors.index')->withSuccess('Updated doctor: ' .$doctor->name);
    }

    public function show(Doctor $doctor)
    {
        return view('doctors_show', compact('doctor'));
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')->withDanger('Deleted doctor: ' .$doctor->name);
    }

}
