<?php

namespace App\Http\Controllers;

use App\Adoptado;
use Illuminate\Http\Request;
use App\Traits;

class AdoptadoController extends Controller
{
    use Traits\UploadFile;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adoptados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adoptados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedInfo = $request->validate([
            'nombre' => 'required|string',
            'foto_antes' => 'required|file',
            'foto_despues' => 'required|file',
            'historia' => 'required|string',
        ]);


        # Guardamos las imagenes de "Antes" y "Después"
        $nameImageBefore = "";
        if($request->hasFile('foto_antes')){
            $nameImageBefore = $this->upload($request->foto_antes,'public/images/adoptados','before');
        }
        $nameImageAfter = "";
        if($request->hasFile('foto_despues')){
            $nameImageAfter = $this->upload($request->foto_despues,'public/images/adoptados','after');
        }

        $adoptado = new Adoptado();
        $adoptado->name = $request->nombre;
        $adoptado->foto_antes = $nameImageBefore;
        $adoptado->foto_despues = $nameImageAfter;
        $adoptado->historia = $request->historia;
        $adoptado->video = ($request->has('video')&&$request->video!="") ? $request->video : "";
        $adoptado->save();

        return redirect('/rescataditos/create')->with('message','Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
