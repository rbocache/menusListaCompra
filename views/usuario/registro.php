<?php ?>

<h1>Registrarse</h1>

<form action="index.php?controller=usuario&action=save" method="POST">

    <label for="nombre">Nombre Usuario</label>
    <input type="text" name="nombre" required>    

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <input type="submit" value="Registrarse">
    
</form>

