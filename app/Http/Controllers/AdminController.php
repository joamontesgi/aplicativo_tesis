<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Result;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function searchUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ],
        [
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email debe ser un correo electrónico'
        ]);
        if ($validator->fails()) {
            return
                redirect('/adminedit') 
                ->withErrors($validator)
                ->withInput();
        }

        $mail = $request->email;
        $user = User::where('email', $mail)->first();
        if ($user) {
            return view('admin.index', ['user' => $user]);
        } else {
            //error message, user not found
            $error_found = 'Usuario no encontrado';
            return view('admin.index', ['error_found' => $error_found]);
        }
    }

    public function editUser(Request $request)
    {
        $validatorChange = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ],
        [
            'name.required' => 'El campo nombre es requerido',
            'name.string' => 'El campo nombre debe ser una cadena de texto',
            'name.max' => 'El campo nombre debe tener máximo 255 caracteres',
            'lastname.required' => 'El campo apellido es requerido',
            'lastname.string' => 'El campo apellido debe ser una cadena de texto',
            'lastname.max' => 'El campo apellido debe tener máximo 255 caracteres',
            'address.required' => 'El campo dirección es requerido',
            'address.string' => 'El campo dirección debe ser una cadena de texto',
            'address.max' => 'El campo dirección debe tener máximo 255 caracteres',
            'role.required' => 'El campo rol es requerido',
            'role.string' => 'El campo rol debe ser una cadena de texto',
        ]);
        if ($validatorChange->fails()) {
            return
                redirect('/adminedit') 
                ->withErrors($validatorChange)
                ->withInput();
        }

        $id = $request->user_id;
        $user = User::find($id);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->role = $request->role;
        $user->save();

        $succes_message = 'Usuario actualizado';
        return view('admin.index', ['succes_message' => $succes_message]);
    }

    public function userGrap(){
        return view('results.admin.index');
    }

    public function searchUserGrap(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ],
        [
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email debe ser un correo electrónico'
        ]);
        if ($validator->fails()) {
            return
                redirect('/searchUserGrap') 
                ->withErrors($validator)
                ->withInput();
        }

        $mail = $request->email;
        $user = User::where('email', $mail)->first();
        if ($user) {
            return view('results.admin.index', ['user' => $user]);
        } else {
            $error_found = 'Usuario no encontrado';
            return view('results.admin.index', ['error_found' => $error_found]);
        }
    }

    public function graficosGrap()
    {
        $results = Result::all();
        return view('results.admin.adminGraphs', compact('results'));
    }

}
