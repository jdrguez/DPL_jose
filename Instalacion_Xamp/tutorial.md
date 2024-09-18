# Instalación de Xamp en linux.

## 1. Descargar el instalador de Xamp en su página oficial.

![](img/1.png)   

## 2. Ejecutar el ejecutable descargado anteriormente.
Para poder ejecutar el archivo necesitarás darle permisos de ejecución. Se hará uso del chmod u+x al archivo.
```bash
sudo chmod u+x xampp-linux-x64-8.2.4-0-installer.run 
```
![](img/2.png)

#### Se procede a ejecutarlo. Debemos esperar que termine de ejecutarse.
![](img/3.png)

``` bash
sudo opt/lampp/xampp start
```
#### Mediante este comando se ejecutan los servicios de xampp, apache y php.

#### Después del paso anterior, pondremos en el navegador localhost/phpmyadmin y nos saldrá lo siguiente:
![](img/5.png)

#### Hay que cambiar la contraseña al root para segurizar el servidor. Se cambiaría desde el propio panel del phpmyadmin. Después de cambiarlo dejará de funcionar.
#### Mediante el siguiente comando se pararán los servicios y se ingresará el documento a cambiar:
```bash

cd opt/lampp/phpmyadmin
sudo nano config.inic.php
```
- Cambiamos la contraseña a la que sea necesario.

#### Crearemos un usuario y le pondremos contraseña y permisos.
![](img/crear_usuario.png)


#### Cambiaremos el fichero config otra vez para poder darle al panel de php que pregunte antes de entrar que usuario usar.
```bash
cd opt/lampp/phpmyadmin
sudo nano config.inic.php
```
- Modificaremos el apartado de $Cfg['Server']['Aut_type']='http'

