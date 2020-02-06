<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Alumno;
use PhpParser\Node\Expr\Cast\Array_;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct(){
		$this->middleware('auth');
	} 
    public function daw1()
    {
        $alumnos = Alumno::where('cod_curso', 1)->get();


        return view('daw1')->with('alumnos',$alumnos);


    }
    public function daw2()
    {
        $alumnos = Alumno::where('cod_curso', 2)->get();

        return view('daw2')->with('alumnos',$alumnos);
    }
    public function todos()
    {
        $alumnos = Alumno::all();

        $alumnos = Alumno::orderBy('cod_curso')->paginate(4);

        return view('todos')->with('alumnos',$alumnos);
    }
    public function alta()
    {
        return view('newAlumno');
    }

    /**Vista unica para curso*/
    public function list($id){
        /*$alumnos = Alumno::find()->where('cod_curso',$id);*/
        $alumnos = Alumno::where('cod_curso', $id)->get();

        return view('curso{$id}')->with('alumnos',$alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumno = new \App\Alumno;

        /*
            $alumno->nom_alumno = $request->nom_alumno;
            $alumno->apell_alumno = $request->apell_alumno;
            $alumno->passwd_alumno = $request->passwd_alumno;
            $alumno->foto_alumno = $request->foto_alumno;
            $alumno->fech_nac_alumno = $request->fech_nac_alumno;
            $alumno->cod_curso = $request->cod_curso;
            $alumno->save();
        */

        $alumno->create($request->all());

        return redirect('alumno');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno;

        $alumno->nom_alumno=$request->nom_alumno;
        $alumno->apell_alumno=$request->apell_alumno;
        $alumno->passwd_alumno=$request->passwd_alumno;
        $alumno->foto_alumno=$request->foto_alumno;
        $alumno->fech_nac_alumno=$request->fech_nac_alumno;
        $alumno->cod_curso=$request->cod_curso;

        $alumno->save();

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = \App\Alumno::find($id);

        return view('modificar')->with('id',$alumno->cod_alumno);
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
        $alumno = \App\Alumno::find($id);

        $alumno->nom_alumno=$request->nom_alumno;
        $alumno->apell_alumno=$request->apell_alumno;
        $alumno->passwd_alumno=$request->passwd_alumno;
        $alumno->foto_alumno=$request->foto_alumno;
        $alumno->fech_nac_alumno=$request->fech_nac_alumno;
        $alumno->cod_curso=$request->cod_curso;

        $alumno->save();

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = \App\Alumno::find($id);
        $alumno->delete();

        return redirect()->back()->with('estado','Eliminacion realizada con exito.');
    }
}
