@extends('layoutPage')
@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <h2>¡Ayúdanos a Ayudar!</h2>
            <div class="row">
                <div class="6u 12u$(small)">
                    <p><strong>Con mucho esfuerzo pero con gran voluntad, realizamos algunos trabajos para obtener recursos y ayudar a nuestros rescataditos.<br>
                            Nos ponemos a tu disposición, nos puedes contactar y con gusto te atenderemos.</strong></p>
                    <ul>
                        <li><strong>Servicio de estética canina.</strong></li>
                        <li><strong>Costura de prendas para mascotas.</strong></li>
                        <li><strong>Ventas de garage con lo que amablemente nos puedan donar.</strong></li>
                    </ul>
                    <p><strong>De igual forma te pedimos nos ayudes a difundir con tus amigos, familiares, contactos nuestra página y nuestro <a href="https://www.facebook.com/calpulalpancorazondeperro/" target="_blank" class="linkWithoutDecoration">grupo en Facebook</a></strong></p>
                </div>
                <div class="6u 12u$(small)">
                    <img src="images/servicios.jpg" alt="Servicios" class="image fit">
                </div>
            </div>
            <div class="justifyContent">
                <h2>Otras maneras de apoyar</h2>
                <p><strong>Como podrás notar, hacemos un gran esfuerzo para poder ayudar a los animalitos que lo necesiten, pero sin duda alguna tu ayuda es muy importante para nosotros.<br>
                Hay temporadas en las que el trabajo escasea y difícilmente la gente nos puede apoyar solicitando servicios, sin embargo cualquier esfuerzo por ayudarnos, sea en efectivo o en especie (alimento, material de curación, material de limpieza) sin importar la cantidad, siempre será bien recibida.<br>
                    ¡Muchas Gracias!</strong></p>

                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Nombre" />
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Déjanos tu mensaje o comentario, gracias por apoyar!" rows="6" style="resize: none;"></textarea>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Enviar" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
