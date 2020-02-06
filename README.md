<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Práctica Desarrollo Web Entorno Servidor MVC con Laravel

Se desarrollará una aplicación web con el Framework Laravel teniendo la siguiente
funcionalidad:
- Accederá a dos tablas relacionadas 1:N: p.e., marcascoches-modelos, categoríasproductos, cursos-alumnos, etc.

- El acceso a la misma se hará mediante Login. 

- La tabla que participa con cardinalidad N tendrá una columna que permitirá almacenar
una imagen. Esta columna será de tipo String y su valor apuntará a storage/app/public,
lugar éste donde se ubicarán los archivos imagen.

- Se realizará una pantalla de listado (vista) con la relación de todas las filas de la tabla
que participa con cardinalidad 1. Por cada fila del listado existirá un botón o enlace, tal
que cuando se haga clic en él, se mostrará un listado (otra vista) con todas las filas
relacionadas de la tabla que participa con cardinalidad N.Se mostrará en la primera vista todas
las categorías de la BD (informática, electrónica, hogar, etc.). Al hacer clic en categoría se 
mostrará en otra vista todos los productos de dicha categoría.

- Habrá pantallas (vistas) que permitan dar de alta, modificar o eliminar cualquier fila de la
tabla que participa con cardinalidad N (en el ejemplo, un producto).

- Todas las pantallas de la aplicación presentarán el usuario actualmente conectado.

- Se incorporará, además, una opción de Salir o Cerrar Sesión. En cualquiera de estos dos casos, 
se cerrará la sesión vigente y se redirigirá a la página de bienvenida o a la de login.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors








## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
