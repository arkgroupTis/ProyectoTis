<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estudiante;
use App\Proyecto;
use App\Docente;
use App\Proyecto_estudiante;
use App\Asignacion;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::orderBy('apellidoEst', 'asc')->paginate(500);
        return view('estudiante.index', compact('estudiantes'));
    }
    public function create_sub()
    {
        $estudiantes = Estudiante::orderBy('apellidoEst', 'asc')->paginate(500);
        return view('proyectos.create', compact('estudiantes'));
    }
    public function proyc_est()
    {

        $proyc_est = Proyecto_estudiante::select('idEstudiante')->get();
        $array = collect([]);
        foreach ($proyc_est as $proy) {
            $array->push($proy->idEstudiante);
        }
        $proyectos = Proyecto_estudiante::select('idProyecto')->get();
        $array1 = collect([]);
        foreach ($proyectos as $proy) {
            $array1->push($proy->idProyecto);
        }
        $tutores = Asignacion::select('idDoc')->get();
        $array2 = collect([]);
        foreach ($tutores as $proy) {
            $array2->push($proy->idProyecto);
        }
        $res[2] = Docente::orderBy('apePaternoDoc', 'asc')->paginate(500);
        $res[1] = Estudiante::whereNotIn('idEstudiante',$array)->paginate(500);
        $res[0] = Proyecto::whereNotIn('idProyecto',$array1)->paginate(500);
        return view('estudiante.proyecto_est', compact('res'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ciEst' => 'required|string',
            'nombreEst' => 'required|string',
            'apellidoEst' => 'required|string',
            'emailEst' => 'required|email',
            'telefono' => 'required|integer',
        ]);
        Estudiante::create([
            'ciEst' => $request['ciEst'],
            'nombreEst' => $request['nombreEst'],
            'apellidoEst' => $request['apellidoEst'],
            'emailEst' => $request['emailEst'],
            'telefono' => $request['telefono'],
            'idProyecto' => NULL,
            'idCarrera' => $request['idCarrera'],
        ]);
        return response()->json([
            'message' => 'Se agrego correctamente!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'estudiante' => Estudiante::where('idEstudiante', $id)->firstOrFail(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ciEst' => 'required|string',
            'nombreEst' => 'required|string',
            'apellidoEst' => 'required|string',
            'emailEst' => 'required|email',
            'telefono' => 'integer',
        ]);
        Estudiante::where('idEstudiante', $id)->update(
            array(
                'ciEst' => $request->ciEst,
                'nombreEst' => $request->nombreEst,
                'apellidoEst' => $request->apellidoEst,
                'emailEst' => $request->emailEst,
                'telefono' => $request->telefono,
                'idCarrera' => $request->idCarrera,
            )
        );
        return response()->json([
            'message' => 'Se modifico correctamente!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::where('idEstudiante', $id)->delete();
        return response()->json([
            'mensaje' => 'Se elimino correctamente!',
        ]);
    }
}
