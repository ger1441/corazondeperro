@extends('layouts.page')

@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <h2>¡Encuentra a un Amigo!</h2>
            <p><strong>Si nos sigues en <a href="https://www.facebook.com/calpulalpancorazondeperro/" target="_blank" class="font-blue enlace-decorate-none">Facebook</a> habrás visto las terribles y desgarradoras historias a las que nos hemos enfrentado, muchos animalitos que han sido maltratados cruelmente y abandonados a su suerte. <br>
                    Pero ésta vez queremos hacer énfasis a lo contrario, queremos enfocarnos en aquellos casos que han brindado una <span class="font-blue">segunda oportunidad</span>, aquellos casos de animalitos que afortunadamente, gracias a personas de buen corazón han encontrado un nuevo hogar.</strong></p>
            <p><strong>Quizá creas que NO puedes cambiar el mundo, pero ten por seguro que sí puedes mejorarlo para un amigo.... <span class="font-blue">¡Adopta!</span></strong></p>

            <div class="12u">
                <p class="text-center"><button class="button"><i class="fa fa-camera"></i> Galería</button></p>
            </div>

            <div>
                <p><strong>Encuentra a tu próximo compañero de vida</strong></p>
                <form action="">
                    <div class="row uniform">
                        <div class="4u 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="especie" id="especie">
                                    <option value="">- Especie -</option>
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Todos">Todos</option>
                                </select>
                            </div>
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="genero" id="genero">
                                    <option value="">- Género -</option>
                                    <option value="Hembra">Hembra</option>
                                    <option value="Macho">Macho</option>
                                    <option value="Todos">Todos</option>
                                </select>
                            </div>
                        </div>
                        <div class="4u$ 12u$(xsmall)">
                            <div class="select-wrapper">
                                <select name="talla" id="talla">
                                    <option value="">- Talla -</option>
                                    <option value="Chica">Chica</option>
                                    <option value="Mediana">Mediana</option>
                                    <option value="Grande">Grande</option>
                                    <option value="Todos">Todos</option>
                                </select>
                            </div>
                        </div>
                        <div class="12u">
                            <button class="button special">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="resultados"></div>
        </div>
    </section>
@endsection
