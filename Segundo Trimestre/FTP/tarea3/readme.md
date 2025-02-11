# Tarea de configuración de FTP utilizando el servidor vsFTP

## Creación de usuarios y asignación de condiciones

Para esta práctica es necesaria la creación de seis usuarios a los que se le pondrán condiciones distintas en el servidor FTP y sus respectivos ficheros de configuración como la _blacklist_ o la lista de usuarios no _enjaulados_.

```sh
sudo adduser usuarioX
```

Y empezamos a aplicar las condiciones asignándoles en los ficheros de configuración creados en la anterior práctica:

1. Usuario1 y Usuario6 estarán enjaulados en su directorio de trabajo.
__Respuesta:__ No hacen falta ajustes adicionales porque, por defecto con la configuración que hicimos previamente, los usuarios estarán enjaulados.

2. Usuario2 y Usuario5 NO estarán enjaulados en su directorio de trabajo.
__Respuesta:__ Para ello, insertamos ambos usuarios en el fichero `/etc/vsftpd.chroot_list`

3. Usuario3 y Usuario4 no tendrán acceso al servidor.
__Respuesta:__ Para eso, insertamos ambos usuarios en el fichero `/etc/vsftpd.user_list`


## Activación de log

El log ya había sido creado previamente pero, para recordar, basta con acceder al fichero de configuración `/etc/vsftpd.conf` y ajustar las siguientes directrices:
```sh
xferlog_enable=YES
xferlog_file=/var/log/vsftpd.log
```

Con la primera linea habilitamos la función mientras que, con la segunda, configuramos la ubicación y el nombre de fichero donde se guardarán los registros generados por los usuarios de nuestro servidor.


## Desconexión automatizada

Como requisito de la práctica, configuraremos nuestro servidor para que cierren la conexión con el usuario entrante tras cinco minutos de inactividad, para ello añadimos la siguiente directriz en el fichero `vsftpd.conf`:

```sh
idle_session_timeout=300
```

## Cifrado de conexión SSL

Nuevamente, este es un requisito ya cumplido en la tarea previa, sin embargo, comparto por segunda vez los comandos utilizados para esta acción como la ubicación de la clave privada y el certificado SSL así como también la habilitación de la función:

```sh

rsa_cert_file=/etc/ssl/certs/vsftpd.pem

rsa_private_key_file=/etc/ssl/private/vsftpd.pem

ssl_enable=YES
```

</div>