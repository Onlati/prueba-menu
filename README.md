Prueba Menu

Descripción

Prueba Menu es un plugin de WordPress que inyecta un menú de navegación (header + versión móvil) a través del shortcode [prueba-menu]. Este menú está optimizado para funcionar en desktop y dispositivos móviles, proporcionando una navegación clara y accesible.

Características

- Implementación de un header responsivo.
- Soporte para navegación móvil con menú hamburguesa.
- Fácil integración mediante el uso de un shortcode.
- Uso de Webpack para optimización de assets (JS y CSS).

Instalación

1. Descarga el repositorio o clónalo en tu instalación de WordPress.
2. Sube la carpeta prueba-menu al directorio wp-content/plugins/.
3. Activa el plugin desde el panel de administración de WordPress.

Uso

Para mostrar el menú en cualquier parte de tu sitio, usa el siguiente shortcode en una página o plantilla:


[prueba-menu]


Estructura de archivos


prueba-menu/
│── dist/               Archivos compilados (CSS y JS optimizados)
│── src/                Código fuente
│   ├── css/            Estilos en CSS
│   │   ├── style.css   Hoja de estilos principal
│   ├── img/            Imágenes del menú (logo, iconos, etc.)
│   ├── js/             Scripts del menú
│   │   ├── main.js     Archivo principal JS
│── prueba-menu.php     Archivo principal del plugin
│── webpack.config.js   Configuración de Webpack
│── README.md           Documentación del plugin


Compilación de assets

El plugin utiliza Webpack para compilar y optimizar los archivos CSS y JS. Para compilar los assets, sigue estos pasos:

1. Instala las dependencias de desarrollo:

   npm install
   
2. Compila los archivos ejecutando:

   npm run build
   

Esto generará los archivos minificados en la carpeta dist/.

Créditos

Desarrollado por Marco Hurtado.

