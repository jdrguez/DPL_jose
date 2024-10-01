# Redirecciones en PHP

Para realizar las redirecciones en php tenemos que hacer uso de la localización del fichero al que queramos redireccionar el flujo del html. Como se ve en el siguiente ejemplo, el fichero html dispondrá del link que manda al usuario al fichero pagina 2. 

```html
<a href="pagina2.php?name=alex">Redirección</a>
```

Este fichero incluye una expresión en php que hace enfoque en header, la etiqueta de html, con ello php logra inyectar la localización del siguiente fichero llamado pagina3.php.

 ``` php
<?php
header( "location: pagina3.php?name=" .$_GET["name"]);
```

<p align="center"><img src="img/captura3_php.png" width="500px" height="200px"/></p>

Con todo lo citado anteriormente, modificamos el fichero pagina3 como si fuera el anterior, con los parámetros que uno consideré para la redirección de los datos.

 Y esto nos lleva al siguiente enlace 

<p align="center"><img src="img/captura4_php.png" width="500px" height="200px" /></p>

Como se muestra en la imagén, la variable name con el valor alex, se envia como un array de datos a la pagina 3 y esta lo recibe mediante la redirreción de información.