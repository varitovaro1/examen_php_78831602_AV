
clon de repositorio

https://github.com/hansalguilberth/examen_php

se logro corregir el error que presentaba al momento de iniciar el servidor con laravel
se creo la base de datos con exito 
implemente microservicio para interactuar con la base de datos 

http://127.0.0.1:8000/api/v1/Autor
http://127.0.0.1:8000/api/v1/Autor?id[eq]=1
http://127.0.0.1:8000/api/v1/Cliente
http://127.0.0.1:8000/api/v1/Cliente?id[eq]=1
http://127.0.0.1:8000/api/v1/Libro
http://127.0.0.1:8000/api/v1/Libro?id[eq]=1
http://127.0.0.1:8000/api/v1/Prestamos
http://127.0.0.1:8000/api/v1/Prestamos?id[eq]=1

se implementaron condiciones para las diferentes busquedas mediante GET

 'eq' => '=',
'lt' => '<',
'lte' => '<=',
'gt' => '<',
'gte' => '=>',

para realizar el registro de prestamos de libro se creo un servicio POST

http://127.0.0.1:8000/api/v1/Prestamos

JSON

{
    "libro_id": "18",
    "cliente_id": "2",
    "fecha_prestamo": "2023-04-16 17:00:38",
    "dias_prestamo": "9",
    "estado": "En Prestamo"
}

