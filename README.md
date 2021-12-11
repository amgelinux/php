# Vagrant LAMP - Ubuntu Hirsute
==========

## Acceso al servidor Apache: 
- URL: http://192.168.33.10

## MySQL:
- Username: root
- Password: toor

Usa MySQL Workbench para gestionar la base de datos.
Importa los scripts que hay en la carpeta scripts_bd.

## Guias para PHP
- Seguiremos el guión del fichero .odt
- Como guía rápida tenemos W3Schools:
  - https://www.w3schools.com/php/default.asp
- Para ir más lento y seguro:
  - Libro de Eugenia Bahit (en la carpeta libros)
  - este profesor tiene buenos vídeos: [Curso de PHP de pildorasinformaticas](https://youtu.be/I75CUdSJifw) 

## Web root
El directorio del fichero **Vagrantfile** debe contener un directorio llamado **htdocs**, que es el web root, compartido y mapeado en /var/www/html.

## Uso de composer
```bash
composer require components/jquery 
composer require twbs/bootstrap 
```
Escribiendo 

```bash
composer install 
```
en la carpeta **/var/www/html** de la máquina virtual se carga lo requerido en **composer.json** que está en el repositorio.

## Configuración de PHPStorm
Adjunto las imágenes con lo que hay que configurar. Carpeta *imgs_setup_phpstorm_vagrant*
