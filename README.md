# CRUD Utilizando Laravel 8 + MySQL + Bootstrap

[![Github][github-shield]][github-url]
[![Kofi][kofi-shield]][kofi-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Khanakat][khanakat-shield]][khanakat-url]

## 📓 TABLA DE CONTENIDO

* [Acerca del proyecto](#acerca-del-proyecto)
* [Características](#características)
* [Instalación](#instalación)
* [Dependencias](#dependencias)
* [Licencia](#licencia)

## 🔥 ACERCA DEL PROYECTO

Este proyecto es una muestra de una solución base de `CRUD` utilizando `PHP Laravel 8 + Bootstrap + MySQL`.

## ✔️ CARACTERÍSTICAS

- [x] CRUD de usuarios
- [x] Login

## ⚙️ INSTALACIÓN

Clonar el repositorio.

```bash
gh repo clone FernandoCalmet
```

Ejecutar aplicación.

```bash
dotnet run
```

### COMANDOS

```bash
# Crear proyecto
composer create-project laravel/laravel laravel8crud

# Migración de base de datos
php artisan migrate

# Crear modelo de Empleado (modelo-control-recurso)
php artisan make:model Empleado -mcr

# Migración de tabla empleados
php artisan migrate

#Ver rutas disponibles
php artisan route:list

#Abrir enlace para comunicarse con la carpeta de storage para imagenes
php artisan storage:link

#Agregar dependencias para autenticación
composer require laravel/ui

# Integrar bootstrap y autenticación
php artisan ui bootstrap --auth

# Procesar toda la aplicación
npm install

# Ejecutar build de integración
npm run dev
```

## Comandos utilizados para los Charts

```bash
# Crear controlador
php artisan make:controller ChartController

# Usar seeder para poblar la tabla de usuarios
php artisan db:seed
```

## 📥 DEPENDENCIAS

- [HighCharts](https://code.highcharts.com/) Siéntase libre de enlazar a los archivos de nuestro CDN en code.highcharts.com. Los archivos están alojados en Amazon CloudFront, que los distribuye a ubicaciones de borde en todo el mundo para un acceso rápido y confiable. Tenga en cuenta que mantenemos una política de uso justo en el uso del ancho de banda.

- [BarChart](https://cdnjs.com/libraries/Chart.js) Chart.JS Gráficos HTML5 simples usando el elemento canvas.

## 📄 LICENCIA

Este proyecto está bajo la Licencia (Licencia MIT) - mire el archivo [LICENSE](LICENSE) para más detalles.

## ⭐️ DAME UNA ESTRELLA

Si esta Implementación le resultó útil o la utilizó en sus Proyectos, déle una estrella. ¡Gracias! O, si te sientes realmente generoso, [¡Apoye el proyecto con una pequeña contribución!](https://ko-fi.com/fernandocalmet).

<!--- reference style links --->
[github-shield]: https://img.shields.io/badge/-@fernandocalmet-%23181717?style=flat-square&logo=github
[github-url]: https://github.com/fernandocalmet
[kofi-shield]: https://img.shields.io/badge/-@fernandocalmet-%231DA1F2?style=flat-square&logo=kofi&logoColor=ff5f5f
[kofi-url]: https://ko-fi.com/fernandocalmet
[linkedin-shield]: https://img.shields.io/badge/-fernandocalmet-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/fernandocalmet
[linkedin-url]: https://www.linkedin.com/in/fernandocalmet
[khanakat-shield]: https://img.shields.io/badge/khanakat.com-brightgreen?style=flat-square
[khanakat-url]: https://khanakat.com
