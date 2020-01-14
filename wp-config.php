<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// Esta opción es imprescindible para garantizar que las actualizaciones de WordPress pueden gestionarse correctamente en el paquete de herramientas de WordPress. Si está instancia de WordPress ya no está gestionada por el paquete de herramientas de WordPress, elimine esta línea.

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '6414068_sa253690_main');
/** MySQL database username */
define('DB_USER', 'sa253690');
/** MySQL database password */
define('DB_PASSWORD', 'Zv@d407e');
/** MySQL hostname */
define('DB_HOST', 'PMYSQL101.dns-servicio.com');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ed&vqFE0Lq%t&F#O@^SI9xjFPgZ2yI5LK6p@&%Ey@akj%Q42DFIppEkWl)6wnYEz');
define('SECURE_AUTH_KEY',  'r&0#^d0G3tcSASJxm2xcLEM9LERxiT9T3H2KcU8UHJtj*UZ0cg3q#Bf!X5wfFttA');
define('LOGGED_IN_KEY',    'KStjpRWlLsf8zL8lz3qjkm5gfNlMzYNmKnN8)m2z268X9J)Zii4bOG9Zmfgp6kYr');
define('NONCE_KEY',        'GuZ6(8AxmK*vOyBn5o7kEWqbB20e#OJi(S%nv#dn(6odzy1lMtE^nRF9DWAz2!66');
define('AUTH_SALT',        '3p6AnM)juwFE38WF7UCiVri99MIo5g3ATsY3bMx9XV%95NHPIL(mYDTtw8)lyoH)');
define('SECURE_AUTH_SALT', 'Cqr)8bR0daaCKWiv&Oex2glDbyjy1(W9hi71lUe^9eSC7KNwMNFiwF3HAI8!sipu');
define('LOGGED_IN_SALT',   'uLC(^xmUB&((O^NjIBasku&vMG)#xZ#BaxA6OauBsZQpS5Sv%#O%xud&hGy8OEOV');
define('NONCE_SALT',       'cR8YnuEqoD!fe0gaa^DE&gHK)OfxpAtz&sqFXch22NgBtJRU7qF7ms*cx6telVFe');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'WP_ALLOW_MULTISITE', true );
define ('FS_METHOD', 'direct');
