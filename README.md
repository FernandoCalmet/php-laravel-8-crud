# CRUD Utilizando Laravel 8 + MySQL + Bootstrap

## Comandos utilizados para el CRUD

```bash
# Crear proyecto
composer createproject laravel/laravel sistemacrud

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

---

:octocat: [Check more about my repositories.](https://github.com/FernandoCalmet)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/T6T41JKMI)
