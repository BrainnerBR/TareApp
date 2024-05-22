<div class="contenedor crear">
<?php include_once __DIR__ . '/../planillas/nombreSitio.php';?>


    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crear Cuenta</p>

        <?php include_once __DIR__ . '/../planillas/alertas.php';?>


        <form class="formulario" method="POST" action="/crear">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" name="nombre" value="<?php echo $usuario->nombre; ?>"/>
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email" value="<?php echo $email->email; ?>"/>
            </div>
            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password"/>
            </div>
            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input type="password2" id="password" placeholder="Repite tu Password" name="password2"/>
            </div>
            <input type="submit" class="boton" value="Crear Cuenta">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes cuenta? Iniciar Sesion</a>
            <a href="/olvide">Olvidaste tu pasword?</a>
        </div>
    </div>
</div>