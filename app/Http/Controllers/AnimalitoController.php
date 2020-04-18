<?php

namespace App\Http\Controllers;

use App\Animalito;
use App\AnimalitoGaleria;
use App\AnimalitoHistoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits;

class AnimalitoController extends Controller
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
        return view('admin.rescataditos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rescataditos.create');
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
            'especie' => 'required|string',
            'genero' => 'required|string',
            'talla' => 'required|string',
            'edad' => 'required|string',
            'foto' => 'required|file',
        ]);

        $mostrar = $request->boolean('chkMostrar');
        $historia = $request->boolean('chkHistoria');

        # Guardamos la imagen
        $newNameImage = "";
        if($request->hasFile('foto')){
            $newNameImage = $this->upload($request->foto,'images/rescataditos');
            /*$auxExtension = $request->foto->extension();
            $auxRand = mt_rand(100000,999999);
            $newNameImage = $auxRand.".".$auxExtension;
            $request->foto->storeAs('images/rescataditos',$newNameImage);*/
        }

        $animalito = new Animalito();
        $animalito->nombre = $request->nombre;
        $animalito->especie = $request->especie;
        $animalito->sexo = $request->genero;
        $animalito->edad = $request->edad;
        $animalito->talla = $request->talla;
        $animalito->description = $request->descripcion;
        $animalito->foto = $newNameImage;
        $animalito->mostrar = $mostrar;
        $animalito->save();

        if($historia){
            #Comprobamos si hay detalle de la historia y NO está vacía
            #Se compara con la cadea <p><br></p> ya que es el valor vacío que asigna summernote
            $detalleHistoria = ($request->historia != '<p><br></p>') ? $request->historia : "";
            if($detalleHistoria!=""){
                $historiaAnimalito = new AnimalitoHistoria();
                $historiaAnimalito->id_animalito = $animalito->id;
                $historiaAnimalito->historia = $detalleHistoria;
                $historiaAnimalito->save();
            }

            #Comprobamos si cargaron imágenes para galería
            if($request->hasFile('fotos')){
                foreach ($request->fotos as $fotoH){
                    # Guardamos la imagen
                    $newNameImage = $this->upload($fotoH,'images/rescataditos/'.$animalito->id,$animalito->id.'_');

                    /*$filename = $fotoH->getClientOriginalName();
                    $auxExtension = $fotoH->getClientOriginalExtension();
                    $auxRand = mt_rand(100000,999999);
                    $newNameImage = $animalito->id."_".$auxRand.".".$auxExtension;
                    $fotoH->storeAs('images/rescataditos/'.$animalito->id,$newNameImage);*/

                    $galeriaAnimalito = new AnimalitoGaleria();
                    $galeriaAnimalito->id_animalito = $animalito->id;
                    $galeriaAnimalito->foto = $newNameImage;
                    $galeriaAnimalito->save();
                }
            }
        }

        return redirect('/rescataditos/create')->with('message','Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function show(Animalito $animalito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function edit(Animalito $animalito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animalito $animalito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animalito $animalito)
    {
        //
    }
}
