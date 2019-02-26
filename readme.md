<h1><b>Caracteristicas:</b></h1>
·         Laravel 5.7 <a href="https://laravel.com/docs/5.7/installation" target="_blank">Instrucciones de instalación</a>
·         Login de Usuarios con Roles. <br>
·         ABMC de Usuarios y Roles con paginación, filtros y ordenamientos de columnas. <br>
·         ABMC de Archivos Excels para los usuarios del Rol Administrador (deben poder hacer un Upload de archivos indicándole un Titulo y Descripción, listarlos, modificarlos y eliminarlos).. <br>
·         Conexión a Base de datos MySQL. <br>
<h1><b>Instalación:</b></h1>

<b>LOCAL</b>
<span> 1: Clonar este repositorio </span>
<p>2: Configurar la base de datos en el archivo .env (tomar el archivo .env.example de base y renombrarlo como .env) </p>
3: Correr los siguientes comandos: <br>
	composer install <br>
	php artisan storage:link <br>
	php artisan migrate <br>
	php artisan db:seed <br>
	php artisan key:generate <br>
	php artisan serve <br>


<b>Datos para ingresar</b>

Administrador:
	Usuario: admin@project.com
	Contraseña: admin

Usuario:
	Usuario: user@project.com
	Contraseña: user