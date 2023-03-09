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