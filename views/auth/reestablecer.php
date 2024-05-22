<div class="contenedor reestablecer">
<?php include_once __DIR__ . '/../planillas/nombreSitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Escribe tu nuevo Password</p>

        <form class="formulario" method="POST" action="/reestablecer">
            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password"/>
            </div>
            <input type="submit" class="boton" value="Guardar Password">
        </form>
        <div class="acciones">
            <a href="/crear">Crear una cuenta</a>
            <a href="/olvide">Olvidaste tu pasword?</a>
        </div>
    </div>
</div>