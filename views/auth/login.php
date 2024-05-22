<div class="contenedor login">
<?php include_once __DIR__ . '/../planillas/nombreSitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>

        <?php include_once __DIR__ . '/../planillas/alertas.php';?>

        <form class="formulario" method="POST" action="/">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email"/>
            </div>
            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password"/>
            </div>
            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>
        <div class="acciones">
            <a href="/crear">Crear una cuenta</a>
            <a href="/olvide">Olvidaste tu pasword?</a>
        </div>
    </div>
</div>