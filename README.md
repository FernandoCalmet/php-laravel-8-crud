# CRUD Laravel 8

Crear proyecto

```bash
composer createproject laravel/laravel sistemacrud
```

Migración de base de datos

```bash
php artisan migrate
```

Crear modelo de Empleado (modelo-control-recurso)

```bash
php artisan make:model Empleado -mcr
```

Migración de tabla empleados

```bash
php artisan migrate
```

Ver rutas disponibles

```bash
php artisan route:list
```

Abrir enlace para comunicarse con la carpeta de storage para imagenes

```bash
php artisan storage:link
```

Agregar dependencias para autenticación

```bash
composer require laravel/ui
```

Integrar bootstrap y autenticación

```bash
php artisan ui bootstrap --auth
```

Procesar toda la aplicación

```bash
npm install
```

Ejecutar integración

```bash
npm run dev
```