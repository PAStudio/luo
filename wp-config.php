<?php
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
define('DB_NAME', 'luo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'C!D7hkW!C0e91Dh@u4rp1fU5UgdkIGWh^)FE^d88xOMEn1DeXERzPF13N1tCaxy3');
define('SECURE_AUTH_KEY',  '^V2x0i@J#!^RU2de6Wx^pInjj2yjMH)g5j#cKrdJhdbBYz(ApXpCT7HLF4^sXcUv');
define('LOGGED_IN_KEY',    'cJeBiquo(siJjPX90L54V@jzNHvN%^7z!XXZI#*n8vAVYp#HNOd#MAgrB)1QCaOr');
define('NONCE_KEY',        'FqqWeV9(0)%%4&LZVuPuKsS8!nvziFw)3LW%^Exe53njnBZ1Ap4h%IalQd7j1nwX');
define('AUTH_SALT',        'kIvxi%jUJ1(UQKVYE0F8#xCOP38^HONdJT#t!q3euJw3SFqP@yDcBPR4nk7mT5xK');
define('SECURE_AUTH_SALT', 'QT0))XeSMibXSVv%BREZupA9fi59Kno7q9(&@JcFKqfTk06JhyDUgyHpQjCp)P7M');
define('LOGGED_IN_SALT',   'wfC@qlfcfqqKDAKoGvFRI0RrcmtEB8V3dBfqqqlqcXTzV2gy1MjK@CCLS)UHkajz');
define('NONCE_SALT',       'yNnHBWMkFvm8I5vsrZC3ygy6k!YYeclyZQwbyFku8zTTP7B&4EI8r&zPW9V8H@LD');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f57aSh2_';

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

define('WP_HOME','http://localhost:8080/luo');
define('WP_SITEURL','http://localhost:8080/luo');
?>