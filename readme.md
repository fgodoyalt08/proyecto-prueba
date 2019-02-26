<h1><b>Caracteristicas:</b></h1>

·         Login de Usuarios con Roles. <br>
·         ABMC de Usuarios y Roles con paginación, filtros y ordenamientos de columnas. <br>
·         ABMC de Archivos Excels para los usuarios del Rol Administrador (deben poder hacer un Upload de archivos indicándole un Titulo y Descripción, listarlos, modificarlos y eliminarlos).. <br>
·         Conexión a Base de datos MySQL. <br>


<h1><b>Instalación:</b></h1>

<b>LOCAL</b>
1: Clonar este repositorio <br>
2: Configurar la base de datos en el archivo .env <br>
3: Correr los siguientes comandos: <br>
	composer install <br>
	php artisan storage:link <br>
	php artisan migrate <br>
	php artisan db:seed <br>
	php artisan serve <br>
