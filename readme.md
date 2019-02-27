<h1><b>Caracteristicas:</b></h1>
<ul>
	<li> Laravel 5.7 <a href="https://laravel.com/docs/5.7/installation" target="_blank">Instrucciones de instalación</a> </li>
	<li> Base de datos MySQL </li>
	<li> Login </li>
	<li> CRUD Usuarios</li>
	<li> CRUD Roles</li>
	<li> CRUD Archivos de Excels para los usuarios Administradores</li>
</ul>


<h1><b>Instalación:</b></h1>

<b>LOCAL</b>
<ul>
	<li>1: Clonar este repositorio</li>
	<li>2: Configurar la base de datos en el archivo .env (tomar el archivo .env.example de base y renombrarlo como .env)</li>
	<li>3: Correr los siguientes comandos:
		<ul>
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

<ul>
	<li>Administrador: 
		<ul>
			<li>Usuario: admin@project.com</li>
			<li>Contraseña: admin</li>
		</ul>
	</li>
</ul>

<ul>
	<li>Usuario: 
		<ul>
			<li>Usuario: user@project.com</li>
			<li>Contraseña: user</li>
		</ul>
	</li>
</ul>