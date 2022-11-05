
<!--  onsubmit="return false" -->

<div class="form">
    <div class="form_container">
        <section class="form_inputs">
            <form action="controllers/verificar.php" method="POST" id="formulario_id">
                <label for="numTarjeta">Número de Tarjeta</label>
                <input type="text" name="numeroTarjeta" id="numTarjeta" placeholder="Número de Tarjeta" autocomplete='off'>
                <div class="selector_campoSelecionado">
                    <select name="select" class="select" id="documentoSelecionado">
                        <option value="dni" selected>DNI</option>
                        <option value="ce">CE</option>
                        <option value="pas">PAS</option>
                    </select>
                    <input type="text" name="documento" id="documento" placeholder="Tipo de documento" autocomplete='off'>
                </div>

                <div class="password">
                    <i class="fa-solid fa-circle-info"></i>
                    <input type="password" name="clave" id="clave" placeholder="Clave Web">
                </div>
                <p id="mensaje_error--clave"></p>
                <button type="submit" value="Entrar" id="entrar">Entrar</button>
            </form>
        </section>

        <section class="enlacesDeCuentas">
            <a href="#">Olvidaste tu contraseña</a>
            <a href="#">Crear Cuena</a>
        </section>
    </div>

</div>
