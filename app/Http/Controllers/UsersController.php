<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
        /**
     * Bug with image in create
     */
    }

    /**
     * Patients a newly created a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PatientRequest $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'image' =>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $imageForSave = time() . '-' . $request->name . '.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageForSave);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image_path' => $imageForSave,
        ]);
        return redirect()->route('users.index')->withSuccess('Created patient ' .$request->name);
    }

    public function patientsSave(Request $request)
    {
        User::create($request->only('name', 'email'));
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, User $user)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'image' =>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $imageForSave = time() . '-' . $request->name . '-' . random_int(-10000, 0). '.' .$request->image->extension();
        $request->image->move(public_path('images'), $imageForSave);

        User::where('name', $user->name)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'image_path' => $imageForSave,
            ]);
        return redirect()->route('users.index')->withSuccess('Updated patient ' .$user->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withDanger('Deleted patient ' .$user->name);
    }
}
