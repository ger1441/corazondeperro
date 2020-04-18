<?php
namespace App\Utilitys;

class MyFunctions
{
    public static function enlaceAdmin(string $enlace){
        $elementos = explode(".",$enlace);
        $arrayAux = [];
        $arrayVerbos = [0=>"","create"=>"Nuevo","show"=>"Detalles"];
        foreach ($elementos as $elemento){
            if($elemento!="index"){
                $newelement = (array_key_exists($elemento,$arrayVerbos)) ? $arrayVerbos[$elemento] : ucfirst($elemento);
                array_push($arrayAux,$newelement);
            }
        }
        $nuevoEnlace = implode("/",$arrayAux);
        return $nuevoEnlace;
    }
}

