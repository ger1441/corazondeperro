@extends('layouts.page')
@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <h2>¡Ayúdanos a Ayudar!</h2>
            <div class="row">
                <div class="6u 12u$(small)">
                    <p><strong>Con mucho esfuerzo pero con gran voluntad, realizamos algunos trabajos para obtener recursos y ayudar a nuestros rescataditos.<br>
                            Ponemos a tu disposición nuestros servicios, nos puedes contactar y con gusto te atenderemos.</strong></p>
                    <ul>
                        <li><strong>Servicio de estética canina.</strong></li>
                        <li><strong>Costura de prendas para mascotas.</strong></li>
                        <li><strong>Ventas de garage con lo que amablemente nos puedan donar.</strong></li>
                    </ul>
                    <p><strong>De igual forma te pedimos nos ayudes a difundir con tus amigos, familiares y contactos nuestra página web y nuestro <a href="https://www.facebook.com/calpulalpancorazondeperro/" target="_blank" class="linkWithoutDecoration">grupo en Facebook</a></strong></p>
                </div>
                <div class="6u 12u$(small)">
                    <img src="images/servicios.jpg" alt="Servicios" class="image fit">
                </div>
            </div>
            <div class="justifyContent">
                <h2>Otras maneras de apoyar</h2>
                <p><strong>Como podrás notar, realizamos diferentes actividades para poder ayudar a los animalitos que lo necesiten, pero sin duda alguna tu ayuda es muy importante para nosotros.<br>
                Hay temporadas en las que el trabajo escasea y difícilmente la gente nos puede apoyar solicitando servicios, sin embargo cualquier esfuerzo por ayudarnos, sea en <span class="font-blue">efectivo o en especie (alimento, material de curación, material de limpieza)</span>  sin importar la cantidad, siempre será bien recibido.<br>
                    ¡Muchas Gracias!</strong></p>
                @include('partials.form')
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="/assets/js/contact.js"></script>
@endpush
