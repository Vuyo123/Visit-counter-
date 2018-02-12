How to install Apache and PHP (LAMP) stack on Ubuntu 16.04

1. Open Terminal 


Step 1: Install Apache and Allow in Firewall

Type the following commands:

$ sudo apt-get update
$ sudo apt-get install apache2
$ sudo apache2ctl configtest
$ sudo nano /etc/apache2/apache2.conf
//Inside, at the bottom of the file, add a ServerName directive, pointing to your primary domain name. If you do not have a domain name associated with your server, you can use your server's public IP address:
Server Name: Domain Name or IP Address//
$ sudo apache2ctl configtest
//Out put must be Syntax OK
$ sudo systemctl restart apache2

Adjust the Firewall to Allow Web Traffic:

$ sudo ufw app list
$ sudo ufw app info "Apache Full"
$ sudo ufw allow in "Apache Full"http://your_server_IP_address
// After you finished then must test if web server is installed by typing http://your_server_IP_address on your browser and it must display "Apache2 Ubuntu Default Page"

To check IP Address:
$ ip addr show eth0 | grep inet | awk '{ print $2; }' | sed 's/\/.*$//'

Step 2: Install PHP
$ sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql
$ sudo nano /etc/apache2/mods-enabled/dir.conf
$ sudo systemctl restart apache2
$ sudo systemctl status apache2

Step 3: Test PHP Processing on your Web Server:
$ sudo nano /var/www/html/info.php
Type the script below:
<?php
phpinfo();
?>
// To test open browser and type :http://your_server_IP_address/info.php

It should display the php home page.

Done!!!

