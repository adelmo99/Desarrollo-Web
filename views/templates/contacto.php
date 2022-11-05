<div class="row algunosProyectos">
    <div class="col-12 p-4">
        <h2>Formulario de Contácto</h2>
    </div>
</div>
<div class="row color_background">
    <div class="col contacto_form_container">
        <div class="redes">
            <h2>Contáctenos</h2>
            <h6>Escríbeme en mis redes sociales o mandame un mensaje desde el formulario sin compromiso para poder ayudarte a despejar tus dudas por si las tienes, disfruta de la web..!</h6>
            <div class="redes_item">
                <h2>Puedes seguirme en:</h2>
                <div class="icons">
                    <a href="https://www.facebook.com/FranciscoMinedOficial" title="Facebook" class="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/Francis70255711" title="Twitter" class="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/francisco_panta_/" title="Instagram" class="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </a>
                    <a href="https://wa.me/999355110" title="WhatsApp" class="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                            <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                        </svg>
                    </a>
                </div>
            </div>
            <p>© 2022 Política de privacidad</p>
        </div>
        <div class="form">
            <h6>Una gran visión sin grandes personas es irrelevante. <br>Trabajemos juntos.</h6>
            <form action="" method="post">
                <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" autocomplete="on" require>
                <input type="email" id="email" name="email" placeholder="Escriba su E-mail" autocomplete="on" require>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" maxlength=180 placeholder="Aquí escriba su mensaje" require></textarea>
                <input type="submit" name="submit">
                <?php include "verificarDatos.php"; ?>
            </form>
        </div>
    </div>
</div>
