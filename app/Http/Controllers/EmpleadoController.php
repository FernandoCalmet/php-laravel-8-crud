<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*
        $data = request()->all();        
        return response()->json($data);
        */

        $campos = [
            'Nombre' => 'required|string|max:50',
            'ApellidoPaterno' => 'required|string|max:30',
            'ApellidoMaterno' => 'required|string|max:30',
            'Correo' => 'required|email',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'Foto.required' => 'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        $data = request()->except('_token'); //no mostrar token

        if($request->hasFile('Foto')){
            $data['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::insert($data);

        //return response()->json($data);
        return redirect('empleado')->with('mensaje', 'Empleado agregado éxitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);        
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'Nombre' => 'required|string|max:50',
            'ApellidoPaterno' => 'required|string|max:30',
            'ApellidoMaterno' => 'required|string|max:30',
            'Correo' => 'required|email'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];

        if($request->hasFile('Foto')){
            $campos = [
                'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
            ];

            $mensaje = [
                'Foto.required' => 'La foto es requerida'
            ];
        }

        $this->validate($request, $campos, $mensaje);

        $data = request()->except('_token', '_method');

        if($request->hasFile('Foto')){
            $empleado = Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);
            $data['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::where('id', '=', $id)->update($data);

        $empleado = Empleado::findOrFail($id);        
        
        //return view('empleado.edit', compact('empleado'));
        return redirect('empleado')->with('mensaje', 'Empleado modificado éxitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);
        }
        
        return redirect('empleado')->with('mensaje', 'Empleado eliminado éxitosamente!');
    }
}
