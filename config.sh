#!/bin/bash

DBHOST=localhost
DBNAME=prueba
DBUSER=root
DBPASSWD=toor
PHPVER=7.4

##########
### Created by Mario Pérez <mario@geekytheory.com>
### Please, visit http://goo.gl/0mMf5Q for more info.
##########
# Update server
apt-get update
# apt-get upgrade -y 

# Install essentials
apt-get -y install build-essential 
apt-get -y install binutils-doc 
apt-get -y install git 
apt-get -y install vim 
apt-get -y install curl 
apt-get -y install software-properties-common


# Vamos con MySQL

debconf-set-selections <<< "mysql-server mysql-server/root_password password $DBPASSWD"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DBPASSWD"
apt-get -y install mysql-server

mysql -uroot -p$DBPASSWD -e "UPDATE mysql.user SET host='%' WHERE user='root';"
mysql -uroot -p$DBPASSWD -e "FLUSH PRIVILEGES;"
# update mysql conf file to allow remote access to the db
sudo sed -i "s/bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf
systemctl restart mysql

# Install apache
apt-get -y install apache2
#Install PHP
apt-get -y install php-curl php-gd php-mysql 
a2enmod rewrite 
systemctl restart apache2
apt-get -y install php libapache2-mod-php php-cli php-mysql php-xdebug

# Install Composer
apt-get -y install composer

echo "-- Configuring xDebug (idekey = PHP_STORM) --"
sudo tee -a /etc/php/$PHPVER/mods-available/xdebug.ini << END

xdebug.idekey=PHP_STORM
xdebug.mode=develop,debug,trace
xdebug.client_host=10.0.2.2
xdebug.client_port=9003
xdebug.scream = yes
xdebug.show_error_trace = yes
xdebug.show_exception_trace = yes
xdebug.show_local_vars = yes

xdebug.start_with_request = yes

END

sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

# ln -fs /vagrant/public /var/www/html

sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/$PHPVER/apache2/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php/$PHPVER/apache2/php.ini

sed -i "s/post_max_size = .*/post_max_size = 250M/" /etc/php/$PHPVER/apache2/php.ini
sed -i "s/upload_max_filesize = .*/upload_max_filesize = 250M/" /etc/php/$PHPVER/apache2/php.ini
sed -i "s/max_execution_time = .*/max_execution_time = 60/" /etc/php/$PHPVER/apache2/php.ini

# Restart Apache service
systemctl restart apache2
