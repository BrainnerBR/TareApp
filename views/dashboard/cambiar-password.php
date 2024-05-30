<?php include_once __DIR__  . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
    <?php include_once __DIR__ . '/../planillas/alertas.php'; ?>

    <a href="/perfil" class="enlace">Volver a Perfil</a>

    <form class="formulario" method="POST" action="/cambiar-password">
        <div class="campo">
            <label for="nombre">Password Actual</label>
            <input class="forbidden"
                type="password"
                name="password_actual"
                placeholder="Tu Password Actual" readonly
            />
        </div>
        <div class="campo">
            <label for="nombre">Password Nuevo</label>
            <input class="forbidden"
                type="password"
                name="password_nuevo"
                placeholder="Tu Password Nuevo" readonly
            />
        </div>

        <input type="submit" value="Guardar Cambios">
    </form>
</div>

<?php include_once __DIR__  . '/footer-dashboard.php'; ?>