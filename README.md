# CRUD Utilizando Laravel 8 + MySQL + Bootstrap

## Comandos utilizados para el CRUD

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

### Charts libraries

[HighCharts](https://code.highcharts.com/) Please feel free to link to the files from our CDN at code.highcharts.com. The files are hosted from Amazon CloudFront, which distributes them to edge locations all over the world for fast access and reliability. Please note we maintain a fair usage policy on bandwidth usage.

[BarChart](https://cdnjs.com/libraries/Chart.js) Chart.JS Simple HTML5 charts using the canvas element.

---

:octocat: [Check more about my repositories.](https://github.com/FernandoCalmet)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/T6T41JKMI)
