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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'satter_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fcRSZ M.-JUP?,F-FFVkb#-qR6pxOwzo/Om1T;ZeCm~/S+1Q-O@w1cLE9V*K:)?v' );
define( 'SECURE_AUTH_KEY',  'Svc6?}#]l62KY[S4{_ i2Uw4Y|o.qZ[q4fp}&CZhNf{s-Xi*nG0Vt^Rb8aO(YXp~' );
define( 'LOGGED_IN_KEY',    ';QL6i_6J3Hq*?;x1!1]<~wh1I;VlqRv{Lv<ve] r@_<d/5TAxfv0hZ-Je93C{:&7' );
define( 'NONCE_KEY',        'acC^6:^zpEdJ=nLymQnsAJb=Z5YiX@0G7r^76==+V}0efOe.>R<|A;;3w#(EX3wL' );
define( 'AUTH_SALT',        'YERVVu>gW{a~;n~,yA:dg)ix]R^v5@Xb_c}[bG(ry46C7;?3%#+gGm;3-H/IM W%' );
define( 'SECURE_AUTH_SALT', 'N]r$kW+ce3p>qryV^=`a1aoGX81xGEk3,BC4H-8*%t]hM1M.n3/rVnModPpC{OOQ' );
define( 'LOGGED_IN_SALT',   '1c^#anMA+^e_C~kjAo&%rR7{DYR`.(WYLNU&PYyT=;_F(Gk@/H#voEM~LcZq(GX{' );
define( 'NONCE_SALT',       'Fk+z)>^FqD~[-9L q5:r`&K|>{fT/{WNT|YxR/GQ@uB6?kX0g@t,HBwKQH;-A8^+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
