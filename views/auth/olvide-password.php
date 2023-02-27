<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password, escribe tu email</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form action="/olvide" class="formulario" method="POST" >
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">

</form>

<div class="acciones">
    <a href="/crear_cuenta">
        ¿Aún no tienes una cuenta? Registrate
    </a>
    <a href="/">
        ¿Ya tienes una cuenta? Ingresa
    </a>
</div>