<?php

namespace App\Http\Controllers;

use App\Animalito;
use App\AnimalitoGaleria;
use App\AnimalitoHistoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        /*$animalito = new Animalito();
        return view('admin.rescataditos.index',['rescataditos'=>$animalito::all()]);*/
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
            $newNameImage = $this->upload($request->foto,'public/images/rescataditos');
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
                    $newNameImage = $this->upload($fotoH,'public/images/rescataditos/'.$animalito->id,$animalito->id.'_');

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
    public function show($idAnimalito)
    {
        $animalito = Animalito::where('id',"=",$idAnimalito)->with('animalitoHistoria','animalitoGaleria')->firstOrFail();
        return view('/admin/rescataditos/show',["rescatadito"=>$animalito]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function edit($idAnimalito)
    {
        $animalito = Animalito::where('id',"=",$idAnimalito)->with('animalitoHistoria','animalitoGaleria')->firstOrFail();
        return view('/admin/rescataditos/edit',["rescatadito"=>$animalito]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAnimalito)
    {
        $validatedInfo = $request->validate([
            'nombre' => 'required|string',
            'especie' => 'required|string',
            'genero' => 'required|string',
            'talla' => 'required|string',
            'edad' => 'required|string',
        ]);

        $animalito = Animalito::findOrFail($idAnimalito);

        $mostrar = $request->boolean('chkMostrar');
        $historia = $request->boolean('chkHistoria');

        # Guardamos la imagen principal en caso de existir
        $newNameImage = $animalito->foto;
        if($request->hasFile('foto')){
            $newNameImage = $this->upload($request->foto,'public/images/rescataditos');
            # Borramos la imagen actual
            Storage::delete("public/images/rescataditos/$animalito->foto");
        }

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
                /*$historiaAnimalito = AnimalitoHistoria::where('id_animalito',$animalito->id)->firstOrFail();
                $historiaAnimalito->id_animalito = $animalito->id;
                $historiaAnimalito->historia = $detalleHistoria;
                $historiaAnimalito->save();*/

                $historiaAnimalito = AnimalitoHistoria::updateOrCreate(
                    ['id_animalito'=>$animalito->id],
                    ['id_animalito'=>$animalito->id,'historia'=>$detalleHistoria]
                );
            }

            #Comprobamos si cargaron imágenes para galería
            if($request->hasFile('fotos')){
                foreach ($request->fotos as $fotoH){
                    # Guardamos la imagen
                    $newNameImage = $this->upload($fotoH,'public/images/rescataditos/'.$animalito->id,$animalito->id.'_');

                    $galeriaAnimalito = new AnimalitoGaleria();
                    $galeriaAnimalito->id_animalito = $animalito->id;
                    $galeriaAnimalito->foto = $newNameImage;
                    $galeriaAnimalito->save();
                }
            }
        }else{
            #Comprobamos si hay historia para limpiarla
            $historiaAnimalito = AnimalitoHistoria::where('id_animalito',$animalito->id)->first();
            if($historiaAnimalito !== null ){
                $historiaAnimalito->delete();
            }

            #Comprobamos si hay galería para limpiarla
            $galeriaAnimalito = AnimalitoGaleria::where('id_animalito',$animalito->id)->get();
            foreach ($galeriaAnimalito as $imagenGallery){
                Storage::delete("public/images/rescataditos/$animalito->id/$imagenGallery->foto");
                $imagenGallery->delete();
            }
        }

        return redirect("/rescataditos/$animalito->id/edit")->with('message','Actualización exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animalito  $animalito
     * @return \Illuminate\Http\Response
     */
    public function destroy($idAnimalito)
    {
        $animalito = Animalito::findOrFail($idAnimalito);
        $animalito->delete();

        return response()->json(['res'=>'success','report'=>'']);
    }

    /* Conoceme ( Seccion de Adopta) */
    public function conoceme($idAnimalito)
    {
        $animalito = Animalito::where('id',"=",$idAnimalito)->with('animalitoHistoria','animalitoGaleria')->firstOrFail();
        return view('conoceme',['rescatadito'=>$animalito,'bodyClass'=>'subpage','navClass'=>'']);
    }
}
