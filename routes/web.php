<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',['bodyClass'=>'','navClass'=>'navFirst',
                'metaDescription'=>'Somos la materialización de la conciencia que se tiene del abandono, de la injusticia y del sufrimiento. Somos el espacio físico real de la esperanza.',
                'openGraph'=>[
                    'title'=>'Somos el espacio físico real de la Esperanza',
                    'type'=>'website',
                    'image'=>'https://www.calpuscorazondeperro.com/images/logo_open_graph.png',
                    'url'=>'https://www.calpuscorazondeperro.com',
                    'description'=>'Ayudamos principalmente a animalitos con alguna discapacidad, atropellados, o enfermos (NO SOMOS FUNDACIÓN NI ASOCIACIÓN).',
                ]
            ]);
});

Route::get('/historia', function () {
    return view('historia',['bodyClass'=>'subpage','navClass'=>'','title'=>'Nuestra Historia | Calpulalpan Corazon de Perro',
        'metaDescription'=>'Somos la materialización de la conciencia que se tiene del abandono, de la injusticia y del sufrimiento. Somos el espacio físico real de la esperanza.',
        'openGraph'=>[
            'title'=>'Conoce la maravillosa historia de nuestra labor',
            'type'=>'website',
            'image'=>'https://www.calpuscorazondeperro.com/images/logo_open_graph.png',
            'url'=>'https://www.calpuscorazondeperro.com',
            'description'=>'Ayudamos principalmente a animalitos con alguna discapacidad, atropellados, o enfermos. Conoce nuestra historia.',
        ]
    ]);
});

Route::get('/adopta', function(){
    return view('adopta',['bodyClass'=>'subpage','navClass'=>'','title'=>'Adopta | Calpulalpan Corazon de Perro',
                'metaDescription'=>'Actualmente hay millones de animalitos en las calles, muchos de ellos violentados y maltratados. Ayuda a cambiar esta realidad, NO compres, ADOPTA',
                'openGraph'=>[
                    'title'=>'Encuentra a un amigo, NO compres, ADOPTA',
                    'type'=>'website',
                    'image'=>'https://www.calpuscorazondeperro.com/images/logo_open_graph.png',
                    'url'=>'https://www.calpuscorazondeperro.com/adopta',
                    'description'=>'Actualmente hay millones de animalitos en las calles, violentados y maltratados. Ayuda a cambiar esta realidad.',
                ]
            ]);
});
Route::get('/adopta/{id}/conoceme','AnimalitoController@conoceme')->name('conoceme');

Route::get('/adopciones','AdoptadoController@adopciones')->name('adopciones');

Route::get('/apoyanos',function(){
    return view('apoyanos',['bodyClass'=>'subpage','navClass'=>'','title'=>'Apoyanos | Calpulalpan Corazon de Perro',
                'metaDescription'=>'Seguimos haciendo un esfuerzo para continuar con nuestra labor. Conoce nuestros servicios con los que contamos para generar recursos y seguir ayudando.',
                'openGraph'=>[
                    'title'=>'Ayúdanos a Ayudar',
                    'type'=>'website',
                    'image'=>'https://www.calpuscorazondeperro.com/images/servicios.jpg',
                    'url'=>'https://www.calpuscorazondeperro.com/apoyanos',
                    'description'=>'Tenemos diferentes actividades para seguir con nuestra labor, tu apoyo es muy valioso para nosotros.',
                ]
            ]);
});

Route::post('/mensaje','MensajeController@envio')->name('envioEmail');

/* Administrador */
Auth::routes();
Route::get('/admin','AdminController@home')->name('home');
Route::resource('/usuarios','UserController');
Route::resource('/rescataditos','AnimalitoController');
Route::resource('/adoptados','AdoptadoController');
Route::get('/mensajes','MensajeController@index')->name('mensajes')->middleware('auth');

Route::get('/test',function() {
    return view('test',['bodyClass'=>'subpage','navClass'=>'']);
});


