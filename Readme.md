COMANDOS QUE HAY QUE EJECUTAR EN LAS INSTANCIAS EC2 PARA QUE SE EJECUTE EL CODIGO EN LA DNS PUBLICA.

sudo apt update
sudo apt install apache2
sudo ufw allow in "Apache"
sudo apt install mysql-server

sudo mysql_secure_installation       MyPassword

si no nos deja salir de la isntalacion tendremos que eliminar la conexion y volver a conectarnos y con 

sudo mysql -u root -p 

Introducimos la contraseña que hemos puesto
y ejecutamos esta consulta que modificara nuestra contraseña 

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password by 'mynewpassword';

sudo apt install php libapache2-mod-php php-mysql
php -v
sudo chown -R ubuntu:ubuntu /var/www/html
sudo rm index.html
sudo nano index.php

En este archivo volcamos nuestro archivo index.php o simplemente lo compartimos mediante ssh
sudo systemctl restart apache2
Si accedemos a la direcion dns publica veremos el dato que hemos guardado

EL CODIGO PHP ES BASTANTE SIMPLE 
Declaro variables con los datos del endpoint de la RDS DB, nombre de la base de datos, usuario y contraseña.

Realizo la conexion a la misma con PDO 
Luego ejecuto una consulta que crea una base de datos.
Tras esto le inserto el campo Juan
Luego hago select a  la base de datos y muestro los registros en este caso solo uno ya que no tenemos mas registros.

Muestro en un h1 cada fila del objeto resultante de la consulta .

Y por ultimo para no tener que tener dos archivos php destruyo la tabla.

No es muy optimo esto que estoy haciendo de crear y eliminar la tabla lo mas eficiente seria crear la tabla a parte y solo ejecutar el select pero como solo podiamos tener un archivo php he decidido hacerlo así.
