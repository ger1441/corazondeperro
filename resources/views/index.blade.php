@extends('layoutPage')

@section('content')
<!-- Banner -->
<section id="banner" class="sectionBanner">
    <h1>Calpulalpan Corazón de Perro</h1>
    <p class="resaltar">No somos Fundación ni Asociación... Apoyamos por vocación y con el corazón &hearts;</p>
</section>

<!-- ¿Qué somos? -->
<section class="wrapper sectionPrincipal">
    <div class="inner">
        <h2>¿Qué somos?</h2>
        <p><strong>Se habla mucho de sueños, para nosotros es la realidad, la prueba viviente de la evolución de la gratitud.<br>
                Para algunos el único hogar conocido, para otros una oportunidad a un nuevo hogar... con historias felices y muchas otras demasiado tristes.</strong></p>
        <p><strong>No somos ángeles ni súper héroes ni nada por el estilo... simplemente somos personas con convicciones fuertes, con comprensión y con la necesidad de cambiar la historia que quizá otros desearon que terminase mal.</strong><p>
        <p><strong>Somos la materialización de la conciencia que se tiene del abandono, de la injusticia y del sufrimiento.<br>
            Somos el espacio físico real de la esperanza.</strong></p>
        <p><strong>Calpulalpan Corazón de Perro es un lugar que te marca para siempre, en donde se recibe el amor en estado puro.</strong></p>
    </div>
</section>

<!-- Nuestra Historia -->
<section class="wrapper sectionPrincipal">
    <div class="inner justifyContent">
        <h2>Nuestra Historia</h2>
        <p><span class="image left"><img src="images/rufita.png" alt="Rufita" /></span><h4><strong>Todo comenzó con Rufita.</strong></h4>
        <strong>Hace algunos años, en 2008, rescaté a una perrita que se encontraba en posesión de unos vecinos, los cuáles desgraciadamente se drogaban.  Me partió el corazón ver que no tenía como atajarse del sol o la lluvia. Insistí e insistí, hasta que un día me dijeron <i>“Ten, llévatela”</i><br> Era pastor inglés.</></p>
        <p><strong>Un día, mi hermano y ella salieron a caminar juntos. Para mala fortuna de ambos, una persona en estado de ebriedad los atropelló y desgraciadamente Rufa resultó herida de gravedad.</strong></p>

        <p><strong>
                Cuándo estaba agonizando, le prometí que esto no quedaría así y que el culpable iba a pagar;<br>
                pero mi mamá me explicó que debía dejar correr la vida, sin odio ni resentimiento y que si quería mantener un buen recuerdo de Rufa, lo mejor era hacer algo positivo para honrar su memoria.
            </strong></p>

        <p><strong>De ésta forma nace la iniciativa de ayudar a peluditos que han sido agredidos, maltratados, violentados, atropellados… algunos discapacitados y otros enfermos.
                Han sido años de lucha constante, pero siempre con la mentalidad y voluntad para apoyar a esos animalitos que han sufrido bastante.</strong></p>

        <p><strong>No solo hemos ayudado a perritos, también hemos ayudado a gatos, loros, caballos y uno que otro animalito de otra especie.<br>
                Con lo que logró juntar de algunos trabajos de estética canina y con la ayuda de mi esposo e hijas hemos logrado salir adelante, al igual que con el apoyo de algunas personas que se acuerdan de nosotros y nuestros rescataditos.</strong></p>

        <p><strong>Y aunque hay temporadas que no cuento con mucha ayuda, espero en Dios seguir con la fortaleza para continuar con ésta gran labor y seguir ayudando animalitos a tener una mejor vida... una vida digna &#128522;</strong></p>
    </div>
</section>

<!-- Milagros -->
<section id="three" class="wrapper special sectionPrincipal">
    <div class="inner">
        <header class="align-center">
            <h3>Los milagros existen... hay esperanza</h3>
            <p><strong>No todo estará perdido mientras haya personas con corazón de perro.</strong></p>
        </header>
        <div class="flex flex-2">
            <article>
                <div class="image fit">
                    <img src="images/familia.png" alt="Familia" />
                </div>
                <header>
                    <h3>Más que un albergue, somos una familia</h3>
                </header>
                <p>En esta labor he encontrado más que un objetivo o un sueño, un motivo para seguir adelante. Una realidad por la cuál vale la pena luchar y sin duda tratar de cambiar.</p>
                <footer>
                    <a href="#" class="button special fit icon fa-camera">Galeria</a>
                </footer>
            </article>
            <article>
                <div class="image fit">
                    <img src="images/oportunidades.png" alt="Oportunidades" />
                </div>
                <header>
                    <h3>Creemos en las segundas oportunidades</h3>
                </header>
                <p>Si bien hemos tratado de apoyar a cualquier animalito que lo necesite, nos hemos enfocado en algunos peluditos que necesitan atención especial o algún tratamiento para seguir adelante.</p>
                <footer>
                    <a href="#" class="button special fit icon fa-camera">Galeria</a>
                </footer>
            </article>
        </div>
    </div>
</section>

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
