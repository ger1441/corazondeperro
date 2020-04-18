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
    </div>
</section>

<!-- Nuestra Historia -->
<section class="wrapper sectionPrincipal">
    <div class="inner justifyContent">
        <h2>Nuestra Historia</h2>
        <p><span class="image left"><img src="images/rufita.png" alt="Rufita" /></span><h4><strong>Todo comenzó con Rufita.</strong></h4>
        <p><strong>Hace algunos años, en 2008, rescaté a una perrita que se encontraba en posesión de unos vecinos los cuáles desafortunadamente se drogaban.  Me dolió ver el estado en el que estaba y que aparte no tenía como atajarse del sol o la lluvia. Insistí e insistí, hasta que un día me dijeron <span class="font-blue"><i>“Ten, llévatela”</i></span><br> Era pastor inglés.</strong></p>
        <p><strong>Un día mi hermano y ella salieron a caminar juntos, para mala fortuna de ambos, una persona en estado de ebriedad los atropelló y Rufita resultó herida de gravedad.</strong></p>

        <p><strong>
                Cuándo estaba agonizando, le prometí que esto no quedaría así y que el culpable iba a pagar;<br>
                pero mi mamá me explicó que debía dejar correr la vida, sin odio ni resentimiento y que si quería mantener un buen recuerdo de Rufa, lo mejor era <span class="font-blue">hacer algo positivo</span> para honrar su memoria.
            </strong></p>

        <p><strong>De ésta historia nace la iniciativa de ayudar a peluditos que han sido agredidos, maltratados, violentados, atropellados… algunos discapacitados y otros enfermos.
                Han sido <span class="font-blue">años de lucha constante</span>, pero siempre con la mentalidad y voluntad para apoyar a esos animalitos que han sufrido bastante.</strong></p>

        <p><span class="image right"><img src="images/logo_historia.png" alt="Logo" /></span><strong>No solo hemos ayudado a perritos, también hemos ayudado a gatos, caballos, aves y uno que otro animalito de diferente especie.<br>
                Con lo que logró juntar de algunos trabajos de estética canina y con la ayuda de mi esposo e hijas hemos logrado salir adelante, al igual que con el apoyo de algunas personas que se acuerdan de nosotros y nuestros rescataditos.</strong></p>

        <p><strong>Y aunque hay temporadas que no cuento con mucha ayuda, espero en Dios <span class="font-blue">seguir con la fortaleza</span> para continuar con ésta gran labor y seguir ayudando animalitos a tener una mejor vida, una vida digna &#128522;</strong></p>
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
                    <a href="#" class="openModal button special fit icon fa-camera" data-modal="Familia">Galeria</a>
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
                    <a href="#" class="openModal button special fit icon fa-camera" data-modal="Oportunidades">Galeria</a>
                </footer>
            </article>
        </div>
    </div>
</section>

<!-- Modal Familia -->
<div id="modalFamilia" class="modal">
    <div class="flexModal" id="flexFamilia" data-modal="Familia">
        <div class="contenido-modal">
            <div class="modal-header flex">
                <h2>Somos una familia <span class="spanClose closeFamilia" data-modal="Familia">&times;</span></h2>
                <p>Actualmente somos más de 70 integrantes en ésta gran familia, agradeceríamos mucho tu <a href="/apoyanos">apoyo</a></p>
            </div>
            <div class="modal-body">
                <span class="image fit" id="imagePFamilia" data-image="images/familia.png"><img src="images/familia.png" alt="" /></span>
                <div class="box alt">
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/01.png"><img src="images/familia/01.png" alt="" /></span></div>
                        <div class="4u"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/02.png"><img src="images/familia/02.png" alt="" /></span></div>
                        <div class="4u$"><span class="image fit imageFit" data-target="imagePFamilia" data-image="images/familia/03.png"><img src="images/familia/03.png" alt="" /></span></div>
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
            <div class="modal-header flex">
                <h2>Tratamos de brindar una segunda oportunidad <span class="spanClose closeFamilia" data-modal="Oportunidades">&times;</span></h2>
                <p>Hemos cobijado a peluditos con alguna discapacidad, agradeceríamos mucho tu <a href="/apoyanos">apoyo</a></p>
            </div>
            <div class="modal-body">
                <span class="image fit" id="imagePOportunidades" data-image="images/oportunidades.png"><img src="images/oportunidades.png" alt="" /></span>
                <div class="box alt">
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/01.png"><img src="images/oportunidades/01.png" alt="" /></span></div>
                        <div class="4u"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/02.png"><img src="images/oportunidades/02.png" alt="" /></span></div>
                        <div class="4u$"><span class="image fit imageFit" data-target="imagePOportunidades" data-image="images/oportunidades/03.png"><img src="images/oportunidades/03.png" alt="" /></span></div>
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
            <p>Para TODOS aquellos que en su momento nos han apodido apoyar en la medida de sus posibilidades... ¡¡GRACIAS!!</p>
            <p>Un detalle para ustedes que no se han olvidado de nosotros</p>
        </header>
        <div class="flex flex-4">
            <div class="box person">
                <div class="image round">
                    <img src="images/agradecimientos/marza.png" alt="Marza" />
                </div>
                <h3>Marza</h3>
                <p>Coffe & Bar</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/agradecimientos/valkiria.png" alt="Valkiria" />
                </div>
                <h3>Valkiria</h3>
                <p>CrossFit</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/agradecimientos/soto.png" alt="Soto" />
                </div>
                <h3>JC Soto</h3>
                <p>Cantante Versatil</p>
            </div>
            <div class="box person">
                <div class="image round">
                    <img src="images/agradecimientos/lobosc.png" alt="Lobos Calpulalpan" />
                </div>
                <h3>Lobos Calpulalpan</h3>
                <p>Futbol Club</p>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script src="assets/js/index.js"></script>
@endpush
