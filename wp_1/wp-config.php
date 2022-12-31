<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}c i;Se.rl!^..lsZi}3R_^pEij.h -8DN{C;y|y6%D;N% 4E7d7=4S1pD9W)7O8' );
define( 'SECURE_AUTH_KEY',  '@>0koMRu=h<SLWc!_rXL9$C-O}*atR$|4mi[;16~,5-auof{Xg$bRVIz Pm*+vEn' );
define( 'LOGGED_IN_KEY',    '@xXcBP|`z-A2GD)93Dq6oj:fiM&%fQWHIS{bpAX8#Rvih/ ~Et!Cnxsh^bUA=ln;' );
define( 'NONCE_KEY',        'm;<FV@Wh(}5P$]Ds1I[!1gM(]6} /E?O4?v9RQX(%+m1qAB 0Jrm`FK:Py1_dbf?' );
define( 'AUTH_SALT',        'C-rt]Gzg!w&J2%IzEw{?ZS;C20NnRcX19=u/1qpULinv.&o|aV{=6z14VVh8KWDr' );
define( 'SECURE_AUTH_SALT', '&U56OP4l?gtjXk`>,&r07W^g~6i;COR1;,EwmMujqfl4N2=1UXHa77/k!$#3H@) ' );
define( 'LOGGED_IN_SALT',   '.Rt;pHh8Gl-h|[xO0t3KW,c^vZWN^c.FH!JkXqCm)VBtO+CXl=/{&eNpnCt9eBxr' );
define( 'NONCE_SALT',       'I,&7[0G1-U{ECZ`(eSBhH?C`zAa7Asx=dJ0T=sx(0g%nrp9Wo7B7!XksFv;)-r,-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
