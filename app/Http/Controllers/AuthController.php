<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function add_patient(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:patients,email|unique:doctors,email',
            'password'=>'required|string',
            'gender'=>'required|string',
            'DOB' => 'required|date|before_or_equal:today',
            'weight' => 'required|numeric|gt:0',
            'phone' => 'required|regex:/^[0-9]{10,}$/',
            'medical_history' => 'required|string',
            'emergency_contact_information' => 'required|regex:/^[0-9]{10,}$/',
            'hospital_id'=> 'required|numeric'
        ]);

        $patient = Patient::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password' => bcrypt($fields['password']),
            'DOB'=>$fields['DOB'],
            'gender'=>$fields['gender'],
            'weight'=>$fields['weight'],
            'phone'=>$fields['phone'],
            'medical_history'=>$fields['medical_history'],
            'emergency_contact_information'=>$fields['emergency_contact_information'],
            'hospital_id'=>$fields['hospital_id']
        ]);

        $token = $patient->createToken('myapptoken')->plainTextToken;

        $response = [
            'patient'=> $patient,
            'token' => $token
        ];

        return response($response,201);
    }


    public function add_doctor(Request $request){
        $fields = $request->validate([
            'doctor_name' => 'required|string',
            'email' => 'required|string|unique:patients,email|unique:doctors,email',
            'password'=>'required|string',
            'gender'=>'required|string',
            'DOB' => 'required|date|before_or_equal:today',
            'specialty' => 'required|string',
            'phone' => 'required|regex:/^[0-9]{10,}$/',
            'hospital_id'=> 'required|numeric',
            'Years_of_experience'=> 'required|numeric'
        ]);

        $doctor = Doctor::create([
            'doctor_name'=>$fields['doctor_name'],
            'email'=>$fields['email'],
            'password' => bcrypt($fields['password']),
            'DOB'=>$fields['DOB'],
            'gender'=>$fields['gender'],
            'phone'=>$fields['phone'],
            'hospital_id'=>$fields['hospital_id'],
            'Years_of_experience'=>$fields['Years_of_experience'],
            'specialty'=>$fields['specialty'],

        ]);

        $token = $doctor->createToken('myapptoken')->plainTextToken;

        $response = [
            'patient'=> $doctor,
            'token' => $token
        ];

        return response($response,201);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();

        return [
            'message' => 'logged out',
        ];
    }


    public function login(Request $request)
{
    $fields = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    // Check if the user is a patient
    $user = Patient::where('email', $fields['email'])->first();

    // If the user is not a patient, check if they are a doctor
    if (!$user) {
        $user = Doctor::where('email', $fields['email'])->first();
    }

    // Check if the user exists and the password is correct
    if (!$user || !Hash::check($fields['password'], $user->password)) {
        return response([
            'message' => 'Bad creds',
        ]);
    }

    // Create a token for the user
    $token = $user->createToken('myapptoken')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token,
    ];

    return response($response, 201);
}

}
