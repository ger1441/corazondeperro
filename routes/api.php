<?php

use App\{Animalito,AnimalitoHistoria,AnimalitoGaleria};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route,Storage};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('rescataditos',function(){
    return datatables()
        ->eloquent(App\Animalito::query())
        ->toJson();
});

Route::get('adoptados',function(){
    return datatables()
        ->eloquent(App\Adoptado::query())
        ->toJson();
});

Route::get('mensajes',function(){
    $mensajes = App\Mensaje::where('leido','=','0')->orderBy('created_at','desc')->get();
    return datatables()::of($mensajes)
                         ->editColumn('created_at',function ($mensaje){
                             return date('d-m-Y H:i:s',strtotime($mensaje->created_at));
                         })
                         ->toJson();
});
Route::delete('mensaje/{id}','MensajeController@delete')->name('deleteMessage');

/* Eliminar imagen de Galería de un Rescatadito */
Route::delete('rescataditos/{id_animalito}/{id_imagen}/delete',function($idA,$idI){
    $imageGallery = AnimalitoGaleria::findOrFail($idI);
    $nameImage = $imageGallery->foto;

    Storage::delete('public/images/rescataditos/'.$idA.'/'.$nameImage);

    $imageGallery->delete();

    return response()->json(['res'=>'success','report'=>'']);
});

/* Busqueda de rescataditos desde la página de Adopción */
Route::post('/adopta/busqueda',function(Request $request){
    $especie = $request->especie;
    $genero  = $request->genero;
    $talla   = $request->talla;

    $arraySearch['especie'] = $especie;
    $arraySearch['mostrar'] = 1;
    if($genero!='Todos') $arraySearch['sexo'] = $genero;
    if($talla!='Todos') $arraySearch['talla'] = $talla;


    $rescataditos = Animalito::where($arraySearch)->get();

    return response()->json($rescataditos);

});
