@extends('layoutPage')
@section('content')
    <section id="one" class="wrapper">
        <div class="inner">
            <h2>¡Ayúdanos a Ayudar!</h2>
            <div class="box justifyContent">
                <p><strong>Actualmente logramos recaudar un poco de dinero mediante los trabajos de estética que realizamos.<br>
                        De igual manera hacemos costura de suéteres para mascotas y ventas de garage con algunas cosas que amablemente la gente nos ha donado para poder juntar un poco más de recursos.</strong><br>
                <p><strong>Solicitamos de tu apoyo, es vital para poder seguir con esta gran labor. <br>
                   Si deseas algún corte para tu mascota o alguna prenda, con libertad nos puedes contactar y con mucho gusto te atenderemos!</strong></p>
            </div>
            <div>
                <p class="image fit" style="text-align: center;"><img src="images/servicios.jpg" alt="Servicios"></p>
            </div>
            <div class="justifyContent">
                <h2>Otras maneras de apoyar</h2>
                <p><strong>Si bien NO dependemos al 100% de donaciones, sin duda tu ayuda es muy importante para nosotros.<br>
                Hay temporadas en las que el trabajo escasea y dificilmente la gente nos puede apoyar solicitando servicios, sin embargo agradecemos cualquier esfuerzo para ayudarnos, sea en efectivo o en especie, siempre será bien recibido.<br>
                    ¡Gracias!</strong></p>

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
