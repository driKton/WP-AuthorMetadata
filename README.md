# WP-AuthorMetadata

[EN] WordPress plugin to add more metadata to the Author's profile

[ES] Plugin de WordPress para añadir campos extra en el perfil de los Autores para sus redes sociales.

## Getting Started | Introducción

[EN] Follow these instructions to install the plugin and use it on a single-{}.php file within the WP loop.

[ES] Sigue estas instrucciones para instalar el plugin y acceder a los datos extra desde una página single-{}.php con el loop de WordPress.

### Prerequisites | Requisitos

 [EN] What things you need to install the plugin.
 [ES] Qué necesitas para instalar y usar el plugin.

```
[EN] A working WordPress installation.
[ES] Una instalación de WordPress funcionando.
```

### Installing | Instalación


[EN] Download and move the extracted folder to:
[ES] Descarga y mueve la carpeta extraída a:

```
YOUR_WORDPRESS_DIR/wp-content/plugins
```

[EN] Activate the plugin in the admin panel.
[ES] Activa el plugin en el panel de administración.

### How to use | Uso

[EN] If you want to display Author's Twitter, just add the following code inside a WordPress loop (can be used outside but you must provide author id - check the codex).
[ES] Para mostrar el Twitter del Autor, simplemente añade este código estando dentro del loop de WP (puedes usarlo fuera del loop, pero tendrás que usar otras funciones o pasar parámetros extras como el ID del Autor - comprueba el codex de WordPress).

```
<?php the_author_meta('twitter');?>
```
