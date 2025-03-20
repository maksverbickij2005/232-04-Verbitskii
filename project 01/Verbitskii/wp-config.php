<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'verbickij' );

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
define( 'AUTH_KEY',         'cZR !Dd[x6H9s*w{N+ OF0Jxp.1atU!= VJ#z]ln/7o)gp!#&WaY_=)D!{Z.YJ6C' );
define( 'SECURE_AUTH_KEY',  ',&U?7.:p!1B`ul.~OC2(:Hw)f4$HmUN6v~h{?%?Mz8CHU_@3p7qy&<a~;|-Z;INO' );
define( 'LOGGED_IN_KEY',    'kU)c,5G{QpjEy::54SD(QV18gBtQH+307G,GOR<zZt8{ mf{VVY|9h,yB<oW880q' );
define( 'NONCE_KEY',        '<H]/S=R]nbN6#Mdg*3vHo0cfx:T1Z/+ByX.6q4Iwa@ cP:#;?H>B{A#&.eZ|wDG;' );
define( 'AUTH_SALT',        '$bp)bJ2NJUStM`}hvA]8857Y4Pr/lVm-t>Bvia5VfY,8Z)4cF(eZ~#l3{^ftUH85' );
define( 'SECURE_AUTH_SALT', 'hQtXPChg1KSvz;(d $%f ;9<Rh`ca0DNzYNyCrW=43^3[tf%p1q`Ku2dF$-]8-&/' );
define( 'LOGGED_IN_SALT',   'D$A2$Hnk^cIviIYj0PsUZ_ztoogUoV3$Hr2u)t${hfrv!1s|Pb12G!&P^PR?L8^i' );
define( 'NONCE_SALT',       'J^.F1IQDOdDEv_:qu.;S[:>u~][0;aD;!4ht,d>{d[[y1%%8:i@}}Jo{]Aj5sIB.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
