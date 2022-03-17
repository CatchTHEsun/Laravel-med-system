<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DoctorsToPatient;
use App\Http\Requests\PatientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class DoctorsToPatientController extends Controller
{
    public function index()
    {
       // $users = User::paginate();

        
        $users=DB::table('users')
                        ->leftjoin('doctors_to_patients', 'users.id', '=', 'doctors_to_patients.patients_id')
                        ->where('doctors_to_patients.patients_id','=',null)
                        ->select('users.*')
                        ->paginate(20);

        return view('doctors_to_patients', ['users' => $users]);
    }

    public function create()
    {
        return view('doctors_form');
    }

    public function store(PatientRequest $request)
    {
        $request->validate([
            'doctors_id' =>'required',
            'patients_id' =>'required',
        ]);

        DoctorsToPatient::create([
            'doctors_id' => $request->input('doctors_id'),
            'patients_id' => $request->input('patients_id'),
        ]);
        return redirect()->route('doctors.index')->withSuccess('Added');
    }

    public function edit(Request $request)
    {   
        //$patients_id = $request->get('patient_id');
        //dd($request->ip());
        $doctors_id = '22';
        $patients_name = $request->get('patient_name');
 
        DoctorsToPatient::create([
            'doctors_id' => $doctors_id,
            'patients_id' => $request->get('patient_id'),
        ]);
        return redirect()->route('doctorstopatients.index')->withSuccess($patients_name.' Added!');
        //return view('doctors_form', compact('doctor'));
    }

    public function update(PatientRequest $request, Doctor $doctor)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required'
        ]);

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
