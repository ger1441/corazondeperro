<form action="/mensaje" method="post" id="frmContacto">
    @csrf
    <div class="row uniform">
        <div class="12u$">
            <input type="text" name="asunto" id="asunto" value="" placeholder="Asunto" required>
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="name" id="name" value="" placeholder="Nombre" required>
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" required>
        </div>
        <!-- Break -->
        <div class="12u$">
            <input type="hidden" name="requerido" id="requerido" value="">
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <textarea name="message" id="message" placeholder="Déjanos tu mensaje o comentario, gracias por apoyar!" rows="6" style="resize: none;" required></textarea>
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="Enviar" /></li>
            </ul>
        </div>
        <div class="12u$ text-center" id="resMessage"></div>
    </div>
</form>
