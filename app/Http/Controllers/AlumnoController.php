<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;


class AlumnoController extends Controller
{
    //


    public function index()
    {
        return DB::table('alumno')->get();
    }

    public function show($id)
    {
        return DB::table('alumno')->where('id', $id)->first();
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:32',
            'telefono' => 'nullable|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:alumno',
            'sexo' => 'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        DB::table('alumno')->insert($data);

        return response()->json([
            'mensaje' => 'Alumno creado correctamente'
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'sometimes|max:32',
            'telefono' => 'nullable|max:16',
            'edad' => 'nullable|integer',
            'password' => 'sometimes|min:6',
            'sexo' => 'sometimes'
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        DB::table('alumno')->where('id', $id)->update($data);

        return response()->json([
            'mensaje' => 'Alumno actualizado'
        ]);
    }



    public function destroy($id)
    {
        DB::table('alumno')->where('id', $id)->delete();

        return response()->json([
            'mensaje' => 'Alumno eliminado'
        ]);
    }
}
