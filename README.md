Proyecto de API para Gestión de Artículos

Este proyecto Laravel es una API RESTful para la gestión de artículos. Permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los artículos, incluyendo su título, descripción, precio y disponibilidad.

Configuración del Proyecto

Requisitos Previos
PHP version 8.0.30

Composer version 2.7.2

Base de datos PostgreSQL


Instalación
1.- Clonar el repositorio: git clone [https://github.com/tu-usuario/tu-proyecto.git](https://github.com/JavierCajamarca/API_Laravel.git)

2.- Copiar el archivo de configuración de ejemplo: cp .env.example .env

3.- Configurar la base de datos en el archivo .env
    En este caso fue se creo la Base de datos postgre con la password 1234

4.- Ejecutar las migraciones: php artisan migrate

5.- Iniciar el servidor de desarrollo: php artisan serve

