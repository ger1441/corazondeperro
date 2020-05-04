@extends('layouts.page')

@section('content')
<!-- Banner -->
<section id="banner" class="sectionBanner">
    <h1>Calpulalpan Corazón de Perro</h1>
    <p class="resaltar">No somos Fundación ni Asociación... Apoyamos por vocación y con el corazón &hearts;</p>
</section>

<!-- ¿Qué somos? -->
<section class="wrapper sectionPrincipal">
    <div class="inner justifyContent">
        <h2>¿Qué somos?</h2>
        <p><strong>Se habla mucho de sueños pero para nosotros es la realidad, la prueba viviente de la evolución de la <span class="font-blue">gratitud</span>.<br>
                Para algunos el único hogar conocido, para otros la oportunidad para encontrarlo; con historias felices... y muchas otras demasiado tristes.</strong></p>
        <p><strong>No somos ángeles, súper héroes, personas ricas, ni nada por el estilo; simplemente somos personas con <span class="font-blue">convicciones fuertes</span>, con <span class="font-blue">comprensión</span> y con la <span class="font-blue">voluntad</span> de cambiar la historia que quizá otros desearon que terminase mal.</strong><p>
        <p><strong>Somos la materialización de la <span class="font-blue">conciencia</span> que se tiene del abandono, de la injusticia y del sufrimiento.<br>
            Somos el espacio físico real de la <span class="font-blue">esperanza</span>.</strong></p>
        <p><strong>Calpulalpan Corazón de Perro es un lugar que te marcará para siempre, en donde se recibe al <span class="font-blue">amor</span> en estado puro.</strong></p>
        <div class="box boxImportant">
            <h3>IMPORTANTE!!!</h3>
            <p><strong>Nuestra labor está <span class="font-blue">enfocada a perritos especiales:</span> amputados, ciegos, enfermos, atropellados, que han sido abandonados a su suerte.<br>
                       Nosotros NO podemos albergar a las mascotas que simplemente la gente ya no quiere o no puede tener, evítanos la pena de negarle un espacio, si gustas podemos apoyarte a buscarle un nuevo hogar.<br>
                       <span class="font-blue">Por favor se consciente</span> de TODO lo que implica un animalito, actualmente tenemos casi 70 perritos y varios gatitos.</strong></p>
        </div>
    </div>
</section>

<!-- Nuestra Historia -->
<section class="wrapper sectionPrincipal">
    <div class="inner justifyContent">
        <h2>Nuestra Historia</h2>
        <p><span class="image left"><img src="images/rufita.png" alt="Rufita" class="borderBlue" /></span><h4><strong>En memoria de Rufa.</strong></h4>
        <p><strong><span class="font-blue">Desde el año 2008</span> hemos ayudado a animalitos desprotegidos, que han sido atropellados, maltratados, quemados, abandonados, violentados, que han tenido alguna complicación por alguna enfermedad y debido ha esto han perdido alguna de sus extremidades o han quedado ciegos.</strong></p>
        <p><strong>Hasta la fecha hemos brindado ayuda a <span class="font-blue">más de 300 animalitos</span>, hemos otorgado una segunda oportunidad, una esperanza de vida. Muchos de los rescates han sido demasiado complicados y desgarradores, algunos con finales muy tristes. Sin embargo, con paciencia, amor y dedicación, la mayoría ha podido salir adelante.</strong></p>
        <p><strong>Lo tenemos que recalcar, no somos Asociación ni Fundación; intentamos cubrir los gastos con nuestros propios recursos, con las diferentes <a href="/apoyanos" title="Conoce nuestras actividades">actividades</a> que realizamos y con el apoyo de las personas. <br>Conoce más de ésta <a href="/historia">maravillosa historia</a> </strong></p>
    </div>
</section>

<!-- Milagros -->
<section id="three" class="wrapper special">
    <div class="inner">
        <header class="align-center">
            <h3 class="font-weight-bold">Los milagros existen... hay esperanza</h3>
            <p><strong>No todo estará perdido mientras haya personas con corazón de perro.</strong></p>
        </header>
        <div class="flex flex-2">
            <article class="justifyContent">
                <div class="image fit">
                    <img src="images/familia.png" alt="Familia" />
                </div>
                <header>
                    <h3 class="font-weight-bold">Más que un albergue, somos una familia</h3>
                </header>
                <p><strong>En esta labor he encontrado más que un objetivo o un sueño, un motivo para seguir adelante. Una realidad por la cuál vale la pena luchar y sin duda tratar de cambiar.</strong></p>
                <footer>
                    <a href="#" class="openModal button special fit icon fa-camera" data-modal="Familia" title="Galeria Familia">Galeria</a>
                </footer>
            </article>
            <article class="justifyContent">
                <div class="image fit">
                    <img src="images/oportunidades.png" alt="Oportunidades" />
                </div>
                <header>
                    <h3 class="font-weight-bold">Creemos en las segundas oportunidades</h3>
                </header>
                <p><strong>Si bien hemos tratado de apoyar a cualquier animalito que lo necesite, nos hemos enfocado en algunos peluditos que necesitan atención especial o algún tratamiento para seguir adelante.</strong></p>
                <footer>
                    <a href="#" class="openModal button special fit icon fa-camera" data-modal="Oportunidades" title="Galeria Oportunidades">Galeria</a>
                </footer>
            </article>
        </div>
    </div>
</section>

<!-- Modal Familia -->
<div id="modalFamilia" class="modal">
    <div class="flexModal" id="flexFamilia" data-modal="Familia">
        <div class="contenido-modal">
            <div class="modal-header">
                <h2>Somos una familia <span class="spanClose closeFamilia" data-modal="Familia">&times;</span></h2>
                <p>Actualmente somos más de 70 integrantes en ésta gran familia, agradeceríamos mucho tu <a href="/apoyanos" title="Apoyanos">apoyo</a></p>
            </div>
            <div class="modal-body">
                <span class="image fit" id="imagePFamilia" data-image="images/familia.png"><img src="images/familia.png" alt="Familia 01" /></span>
                <div class="box alt">
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/01.png"><img src="images/familia/01.png" alt="Familia 02" /></span></div>
                        <div class="4u"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/02.png"><img src="images/familia/02.png" alt="Familia 03" /></span></div>
                        <div class="4u$"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/03.png"><img src="images/familia/03.png" alt="Familia 04" /></span></div>
                        {{--<!-- Break -->
                        <div class="4u"><span class="image fit"><img src="images/familia/01.png" alt="" /></span></div>
                        <div class="4u"><span class="image fit"><img src="images/familia/02.png" alt="" /></span></div>
                        <div class="4u$"><span class="image fit"><img src="images/familia/03.png" alt="" /></span></div>--}}
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="buton special closeFamilia" data-modal="Familia">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Oportunidades -->
<div id="modalOportunidades" class="modal">
    <div class="flexModal" id="flexOportunidades" data-modal="Oportunidades">
        <div class="contenido-modal">
            <div class="modal-header">
                <h2>Tratamos de brindar una segunda oportunidad <span class="spanClose closeFamilia" data-modal="Oportunidades">&times;</span></h2>
                <p>Hemos cobijado a peluditos con alguna discapacidad, agradeceríamos mucho tu <a href="/apoyanos">apoyo</a></p>
            </div>
            <div class="modal-body">
                <span class="image fit" id="imagePOportunidades" data-image="images/oportunidades.png"><img src="images/oportunidades.png" alt="Oportunidades 01" /></span>
                <div class="box alt">
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/01.png"><img src="images/oportunidades/01.png" alt="Oportunidades 02" /></span></div>
                        <div class="4u"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/02.png"><img src="images/oportunidades/02.png" alt="Oportunidades 03" /></span></div>
                        <div class="4u$"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/03.png"><img src="images/oportunidades/03.png" alt="Oportunidades 04" /></span></div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="buton special closeFamilia" data-modal="Oportunidades">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Agradecimientos -->
<section id="two" class="wrapper style1 special">
    <div class="inner">
        <header>
            <h2>Un pequeño agradecimiento</h2>
            <h3>Para TODOS aquellos que nos han ayudado en la medida de sus posibilidades... ¡¡GRACIAS!!</h3>
        </header>
        <div class="row">
            <div class="12u">
                <h3 class="text-center">Un detalle a los Médicos Veterinarios que siempre nos han apoyado en todo sentido</h3>
            </div>
        </div>
        <div class="flex flex-4 flexVeterinarios">
            <div class="box person">
                <div class="image round">
                    <img src="images/mvz/angel.png" alt="Angel Ortega" />
                </div>
                <h3>Ángel Ortega</h3>
                <p>MVZ</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/mvz/antonio.png" alt="Antonio Espejel" />
                </div>
                <h3>Antonio Espejel</h3>
                <p>MVZ</p>
            </div>
        </div>

        <div class="row">
            <div class="12u">
                <h3 class="text-center">Una especial mención a todos los que han tratado de mantener un constante apoyo para nuestra labor</h3>
            </div>
        </div>
        <div class="table-wrapper">
            <table class="alt">
                <tbody>
                <tr>
                    <td>Azucena Valdez Magaña</td>
                    <td>Profesora</td>
                </tr>
                <tr>
                    <td>Templario DF CMLL</td>
                    <td>Luchador Profesional</td>
                </tr>
                <tr>
                    <td>Diablitos del Mictlan</td>
                    <td>Organización Comunitaria</td>
                </tr>
                <tr>
                    <td>Mel Márquez</td>
                    <td>Fundador de "Talento Calpulalpan"</td>
                </tr>
                <tr>
                    <td>Hits 96.3 FM</td>
                    <td>Radiodifusora</td>
                </tr>

                <tr>
                    <td>Joannah Muñoz</td>
                    <td>Diseñadora Gráfica</td>
                </tr>
                <tr>
                    <td>Adriana Ahuatzi</td>
                    <td>Doctora</td>
                </tr>
                <tr>
                    <td colspan="2">Maquerri Balderas</td>
                </tr>
                <tr>
                    <td colspan="2">Nallely</td>
                </tr>
                <tr>
                    <td colspan="2">Demy y Jorge Contreras</td>
                </tr>
                <tr>
                    <td colspan="2">Héctor Almazán</td>
                </tr>
                <tr>
                    <td colspan="2">Alberto Casterlan</td>
                </tr>
                <tr>
                    <td colspan="2">Fundación Tete</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script src="assets/js/index.js"></script>
@endpush
