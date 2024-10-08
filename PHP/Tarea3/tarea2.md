# Insertar datos en la base de datos através del php

Este es el código para para introducir datos en la base de datos con PHP. Agrega un nuevo campo en la tabla.

```html
<h2>Insertar Nuevo Usuario</h2>
<form action="insert.php" method="POST">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Correo:</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" value="Insertar">
</form>
```

# Leer datos desde de PHP.

El formulario redirige read.php que es el encargado de leer la base de datos.
```html
<h2>Leer Todos los Usuarios</h2>
<a href="read.php">Ver Usuarios</a>
```

# Modificar datos desde PHP y formulario.

Formulario para la modificación de datos que ya han sido introducidos en la base de datos.

```html
<h2>Modificar Usuario</h2>
<form action="update.php" method="POST">
    <label for="id">ID del Usuario a Modificar:</label>
    <input type="number" name="id" required>
    <br>
    <label for="name">Nuevo Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Nuevo Correo:</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value="Modificar">
</form>
```

# Eliminar datos de la base de datos con PHP y formularios.

Como los anteriores ejecutamos las eliminaciones desde el siguiente formulario.

```html
<h2>Eliminar Usuario</h2>
<form action="delete.php" method="POST">
    <label for="id">ID del Usuario a Eliminar:</label>
    <input type="number" name="id" required>
    <br>
    <input type="submit" value="Eliminar">
</form>
```