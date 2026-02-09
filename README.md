# Práctica Laravel – CRUD Alumnos

## Descripción
Proyecto desarrollado en Laravel que implementa un CRUD completo para la tabla `alumno`,
utilizando migrations, seeders, controllers, rutas, middleware y validaciones.

---

## Requisitos
- PHP
- Composer
- MySQL
- XAMPP
- Laravel

---

## Comandos utilizados

### Crear proyecto Laravel
composer create-project laravel/laravel alumnos-api  
Crea un nuevo proyecto Laravel.

### Iniciar servidor
php artisan serve  
Inicia el servidor de desarrollo.

### Crear migración
php artisan make:migration create_alumno_table  
Crea la migración de la tabla alumno.

### Ejecutar migraciones
php artisan migrate  
Ejecuta las migraciones en la base de datos.

### Crear seeder
php artisan make:seeder AlumnoSeeder  
Crea el seeder para insertar datos de prueba.

### Ejecutar seeder
php artisan db:seed --class=AlumnoSeeder  
Inserta registros en la tabla alumno.

### Crear controller
php artisan make:controller AlumnoController  
Crea el controlador para el CRUD.

### Crear middleware
php artisan make:middleware ValidarId  
Crea middleware para validar el parámetro id.

---

## Funcionalidades
- Obtener todos los alumnos
- Obtener alumno por ID
- Crear alumno
- Modificar alumno
- Eliminar alumno
- Validación del ID mediante middleware
- Validaciones de datos con Laravel

---

## Autor
Práctica académica – Laravel
