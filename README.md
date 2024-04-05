## Proyecto de API para Gestión de Artículos

Este proyecto Laravel es una API RESTful para la gestión de artículos. Permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre los artículos, incluyendo su título, descripción, precio y disponibilidad.

## Configuración del Proyecto
- [PHP version 8.0.30](https://www.php.net/downloads.php)
- [Composer version 2.7.2](https://getcomposer.org/download/)
- [Laravel version 9.52.16](https://laravel.com/docs/9.x)
- [PostgreSQL version 16](https://www.postgresql.org/download/windows/)
## Instalación
  
- Clonar el repositorio: git clone [https://github.com/tu-usuario/tu-proyecto.git](https://github.com/JavierCajamarca/API_Laravel.git)
- Configurar la base de datos en el archivo .env

    Nombre BD: `postgre` 
    password:  `1234`
- Ejecutar las migraciones: `php artisan migrate`
- Iniciar el servidor de desarrollo: `php artisan serve`


## Uso de la API

- Obtener todos los artículos

    `GET /api/articulos   //  GET http://127.0.0.1:8000/api/articulo`
- Crear un nuevo artículo

    `POST /api/articulos  // POST http://127.0.0.1:8000/api/articulo`
    
        body de la solicitud 
  #### articulo 1
        {
        "titulo": "Jabon",
        "descripcion": "Jabon en barra para uso exclusivo de la ropa",
        "precio": 4500.99,
        "disponibilidad": true
        }
  #### articulo 2
        {
        "titulo": "Caja acústica",
        "descripcion": "el bafle es la estructura en la cual se coloca un altavoz.",
        "precio": 185500.09,
        "disponibilidad": true
        }
     - articulo 3
        {
        "titulo": "Congelador",
        "descripcion": "Dispositivo de refrigeración que comprende un compartimento de un aislamiento térmico y un mecanismo de transferencia de calor con el medio externo",
        "precio": 1304500.79,
        "disponibilidad": true
        }
     - articulo 4
        {
        "titulo": "Ventiladores",
        "descripcion": "Dispositivos eléctricos que nos ayudan a combatir el calor, así como a promover la ventilación de lugares cerrados",
        "precio": 150000.00,
        "disponibilidad": true
        }
     - articulo 5
        {
        "titulo": "Lavadora",
        "descripcion": "Electrodoméstico destinado a limpiar el ropa mediante el uso de agua caliente o fría y detergentes",
        "precio": 850000.00,
        "disponibilidad": true
        }
- Obtener un artículo por ID
  
    `GET /api/articulos/{id}  //  GET http://127.0.0.1:8000/api/articulo/3`
- Actualizar un artículo existente

    `PUT /api/articulos/{id}  //  PUT http://127.0.0.1:8000/api/articulo/2`

        {
        "titulo": "Bocina",
        "descripcion": "el bafle es la estructura en la cual se coloca un altavoz.",
        "precio": 135500.09,
        "disponibilidad": true
        }
- Eliminar un artículo
    `DELETE /api/articulos/{id}    //  http://127.0.0.1:8000/api/articulo/5`
## Autor
[https://github.com/JavierCajamarca](https://github.com/JavierCajamarca)











