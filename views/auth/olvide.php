<div class="contenedor olvide">
<?php include_once __DIR__ . '/../planillas/nombreSitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Password</p>

        <?php include_once __DIR__ . '/../planillas/alertas.php';?>


        <form class="formulario" method="POST" action="/olvide" novalidate>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email"/>
            </div>
            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes una cuenta? Iniciar Sesion</a>
            <a href="/crear">Crear una cuenta</a>
        </div>
    </div>
</div>