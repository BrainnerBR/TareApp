<div class="contenedor login">

<div class="contendedor-sm">
<div class="mensaje-emergente">
            <h1>Informational Purposes Only</h1>
            <p>Dear guest,<br>
               Please use these credentials to login and take a look inside 👀<br>
               <span class="click-to-copy" data-copy="adminguest@gmail.com">adminguest@gmail.com</span><br>
               <span class="click-to-copy" data-copy="guest123456">guest123456</span>
            </p>
        </div>
</div>
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

<script>
document.querySelectorAll('.click-to-copy').forEach(element => {
    element.addEventListener('click', () => {
        const textToCopy = element.getAttribute('data-copy');
        navigator.clipboard.writeText(textToCopy).then(() => {
            alert('Copied to clipboard: ' + textToCopy);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    });
});
</script>