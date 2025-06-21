<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings ** //
define( 'DB_NAME', 'pategg_db' );         // Cambia si usas otro nombre en phpMyAdmin
define( 'DB_USER', 'root' );           // Usuario por defecto en MAMP
define( 'DB_PASSWORD', 'root' );       // Contraseña por defecto en MAMP
define( 'DB_HOST', 'localhost' );      // Host correcto en MAMP
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 * Puedes generarlos nuevos en: https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'pon aquí una frase única' );
define( 'SECURE_AUTH_KEY',  'pon aquí una frase única' );
define( 'LOGGED_IN_KEY',    'pon aquí una frase única' );
define( 'NONCE_KEY',        'pon aquí una frase única' );
define( 'AUTH_SALT',        'pon aquí una frase única' );
define( 'SECURE_AUTH_SALT', 'pon aquí una frase única' );
define( 'LOGGED_IN_SALT',   'pon aquí una frase única' );
define( 'NONCE_SALT',       'pon aquí una frase única' );
/**#@-*/

/**
 * WordPress database table prefix.
 * Puedes dejarlo como `wp_` o cambiarlo si quieres mayor seguridad.
 */
$table_prefix = 'wp_';

/**
 * Modo de depuración.
 */
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true ); // Guarda avisos en wp-content/debug.log


/** Ruta absoluta al directorio de WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura las variables de WordPress y los archivos incluidos. */
require_once ABSPATH . 'wp-settings.php';
