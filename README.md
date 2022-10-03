# MyDrive
<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/Home.png"></p>

<p>
Esta web permite a un usuario almacenar, compartir, abrir, editar, eliminar y ver cualquier archivo de forma online, este proyecto es ideal para implementarlo de forma local tanto para uso doméstico como profesional. Al registrarse el sistema asigna automaticamente 10GB de espacio, aunque esto puede ser retocado por el administrador como se observa en la sección de Personalización. Recalcar que este sistema implementa un tutorial interactivo para los nuevos usuarios [Enjoyhint]
</p>

## Panel Público (Dark)
<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/Contenido_P.png"></p>

<p>
Aquí cualquier usuario puede modificar o ver de forma que los cambios realizados son público, el contenido de este  'directorio'
pertence al 'htdocs' de Xampp.
</p>

## Panel Privado (Light)
<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/Contenido_PP.png"></p>

<p>
Además del panel público el usuario dispone de su propio panel privado, donde tiene la posibilidad de ompartir si lo desea cualquier contenido a un usuario concreto.
</p>

## Dropzone
<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/DropZone.png"></p>

<p>
Cuando el usuario se disponga a subir 'X' archivo al servidor puede hacerlo mediante el botón situado al comienzo de la web
o desde el propio panel.
</p>

## Tutorial 
<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/Tutorial.png"></p>

<p>
 + Se ha implementado usando 'enjoyhint' un tutorial interactivo para los nuevos usuarios.
</p>

## Personalización

### 1.Diagrama Entidad Relación:

<p align="center"><img src="https://github.com/AcoranGonzalezMoray/MyDrive/blob/main/images/Diagrama%20entidad%20relaci%C3%B3n.png"></p>
Donde Lim, indica los GB asignados a un usuario nuevo, y tutorial si un nuevo usuario ya pasó el tutorial
<br>

### 2.Directorio usado para los espacios privados de cada usuario:

Como se ha comentado la ruta para el directorio público usado es el propio htdocs de xampp, mientras que la ruta donde se crean los directorios privados (la creación de los ficheros al registrarse un usuario ya viene implementado solo hay que cambiar la ruta) pertenece a un disco hdd, por tanto está fuera del diretorio predeterminado como público. Para añadir una nueva ruta fuera de htdocs como accesible en xampp se ha de configurar el archivo 'httpd.conf' añadiendo las siguientes líneas

httpd.conf:
```
# Example:
    # Redirect permanent /foo http://www.example.com/bar

    #
    # Alias: Maps web paths into filesystem paths and is used to
    # access content that does not live under the DocumentRoot.
    # Example:
    # Alias /webpath /full/filesystem/path
    #
    # If you include a trailing / on /webpath then the server will
    # require it to be present in the URL.  You will also likely
    # need to provide a <Directory> section to allow access to
    # the filesystem path.
    Alias /'nombre' "ruta"
    <Directory "ruta">
      Options Indexes FollowSymLinks
      AllowOverride All
      Require all granted
    </Directory>
  
```

A continuación se copia el archivo ```allUser/prueba/index.php``` y se pega en el nuevo directorio privado que se ha especificado anteriormente además de modificar las siguientes líneas:

allUser/prueba/index.php:
```
...

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = 'ruta_directorio_privado';
...

```

## FrameWorks de 3
