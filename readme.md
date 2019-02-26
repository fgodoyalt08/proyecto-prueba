<h1><b>Caracteristicas:</b></h1>
·         Laravel 5.7 <a href="https://laravel.com/docs/5.7/installation" target="_blank">Instrucciones de instalación</a>
·         Login de Usuarios con Roles. <br>
·         ABMC de Usuarios y Roles con paginación, filtros y ordenamientos de columnas. <br>
·         ABMC de Archivos Excels para los usuarios del Rol Administrador (deben poder hacer un Upload de archivos indicándole un Titulo y Descripción, listarlos, modificarlos y eliminarlos).. <br>
·         Conexión a Base de datos MySQL. <br>
<h1><b>Instalación:</b></h1>

<b>LOCAL</b>
<ul>
	<li>1: Clonar este repositorio</li>
	<li>2: Configurar la base de datos en el archivo .env (tomar el archivo .env.example de base y renombrarlo como .env)</li>
	<li>
		<ul>
			<li> 3: Correr los siguientes comandos:</li>
			<li> composer install</li>
			<li> php artisan storage:link</li>
			<li> php artisan migrate</li>
			<li> php artisan db:seed </li>
			<li> php artisan key:generate</li>
			<li> php artisan serve</li>
		</ul>
	</li>
	<li></li>
</ul>

<b>Datos para ingresar</b>

Administrador:
	Usuario: admin@project.com
	Contraseña: admin

Usuario:
	Usuario: user@project.com
	Contraseña: user