# Gestor de Energías Renovables

Sistema de gestión y monitoreo de instalaciones de energías renovables.

## Pasos para la Instalación y Despliegue

```bash
# 1. Clonar el repositorio existente
git clone https://github.com/Dav1dManzanares/Laboratorio2-Database.git
cd Laboratorio2-Database

# 2. Crear la carpeta del proyecto
mkdir gestor-de-energias-renovables

# 3. Copiar archivos del proyecto
# (Copiar todos los archivos aquí)

# 4. Preparar y subir cambios
git add .
git commit -m "feat: sistema de gestión de energías renovables"
git push origin main
```

## Configuración del Repositorio
```bash
# En VS Code Terminal:

# 1. Inicializar git
git init

# 2. Agregar el remoto
git remote add origin https://github.com/Dav1dManzanares/Laboratorio2-Database.git

# 3. Crear y cambiar a la rama main
git checkout -b main

# 4. Primer commit
git add .
git commit -m "feat: sistema de gestión de energías renovables"

# 5. Subir cambios
git push -u origin main
```

## Estructura
- `/database`: Migraciones y seeders
- `/app/Models`: Modelos de la aplicación
- `/routes`: Rutas API y web
- `/app/Http/Controllers`: Controladores

## Instalación
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

## API Endpoints
- GET `/api/dashboard`: Dashboard general
- GET `/api/instalaciones`: Lista de instalaciones
- GET `/api/measurements/latest`: Últimas mediciones
- GET `/api/weather-data/today`: Datos climáticos del día
