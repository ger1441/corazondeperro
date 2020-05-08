<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{

    public function index()
    {
        //$mensajes = Mensaje::orderBy('updated_at','desc')->get();
        return view('admin.mensajes.index');
    }

    public function envio(Request $request)
    {
        //dd($request);
        $response = ['result'=>'fail','report'=>''];
        if(!$request->requerido){
            $validateForm = $request->validate([
                'asunto'  => 'required|string',
                'name'  => 'required|string',
                'email'   => 'required|email',
                'message' => 'required|string',
                'g-recaptcha-response' => 'required'
            ]);

            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('RECAPTCHA_V3_SECRETKEY')."&response=".$request->get('g-recaptcha-response'));
            $result = json_decode($verify);

            if($result->success){
                $ip = $request->server->get('REMOTE_ADDR') ?? "Unknow";
                $puerto = $request->server->get('REMOTE_PORT') ?? "Unknow";
                $userAgent = $request->server->get('HTTP_USER_AGENT') ?? "Unknow";
                $referer = $request->server->get('HTTP_REFERER') ?? "Unknow";
                $cadenaInfo = "Ip: ".$ip." | Puerto: ".$puerto." | User Agent: ".$userAgent." | Referer: ".$referer;

                $message = new Mensaje();
                $message->asunto = $request->asunto;
                $message->nombre = $request->name;
                $message->email = $request->email;
                $message->mensaje = $request->message;
                $message->informacion = $cadenaInfo;
                $message->save();

                $response['result'] = 'success';
            }else{
                $response['report'] = 'Por favor, por seguridad recarge la página.';
            }

        }else{
            $response['report'] = 'Por el momento NO puede enviar mensajes. Intente más tarde por favor';
        }
        return response()->json($response);
    }

    public function delete($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();

        return response()->json(['result'=>'success']);
    }
}
