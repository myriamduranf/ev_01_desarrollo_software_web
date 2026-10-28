# Proyecto Laravel - Evaluación 1

## Contexto Técnico (Prompt para IA)
Esta es una aplicación desarrollada en Laravel utilizando vistas Blade y Tailwind CSS. Actualmente los datos se manejan mediante arreglos estáticos en el modelo, sin conexión a base de datos.

## Estado Actual (Lo que ya está listo)
- **API Externa:** Componente UF funcionando en tiempo real (consume `https://api.gael.cloud/general/public/monedas/UF`).
- **Modelo `Proyecto`:** Configurado con 2 registros estáticos de prueba y el método `buscarPorId($id)` para filtrar información.
- **Módulo Listado:** Ruta principal y vista `index.blade.php` creadas.
- **Módulo Detalles:** 
  - Controlador invocable (`VerProyectoController`) configurado con manejo de error 404.
  - Ruta dinámica paramétrica (`/proyectos/{id}`) registrada.
  - Vista `detalles.blade.php` maquetada con Tailwind CSS mostrando la data individual.

## Próximo Paso (Pendiente)
- Configurar el enlace del botón "Ver" dentro del ciclo de la vista `index.blade.php` para que navegue dinámicamente a `/proyectos/{id}` usando el ID correspondiente.

## Instrucciones para levantar el proyecto localmente
Como el repositorio ignora la carpeta `vendor` y el archivo de entorno, al clonar el proyecto debes ejecutar lo siguiente en tu terminal:

1. Instalar dependencias: `composer install`
2. Crear archivo de entorno: Copiar `.env.example` y renombrarlo a `.env`
3. Generar llave de aplicación: `php artisan key:generate`
4. Iniciar servidor: `php artisan serve`
