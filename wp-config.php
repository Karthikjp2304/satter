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
define( 'AUTH_KEY',         '^-+Qum]ux.hFK_8kvwoB)l[~8#E{j~y6I1StX$f#BQye4X.#k+W+~f52zKc]fM~9' );
define( 'SECURE_AUTH_KEY',  'Cw0cL.`u7v6FgqKUaVYGBnt:CQV@o?C#&6XMUV81ZR8H&>x7h~xHgs:sBp{GNVch' );
define( 'LOGGED_IN_KEY',    'B`4!!I5RVU4&#jpx{)f)emhr+]jmE:)BcaQ_*i1 VLzDt@L,X$,1O92[kE4}=5E4' );
define( 'NONCE_KEY',        '_v%nW/M8,RA6+R(jjcOk@dI5yIvVI$$ze{r5pg!Fb{Kx[2K=o)GOW75Q>fdpOHK?' );
define( 'AUTH_SALT',        'rh3K>yUzv},3:m{K8#yI4pjtvgv5l9Wo9:LZ`6S}Yo&#NGlPmeU1VTxxRe_1hC@x' );
define( 'SECURE_AUTH_SALT', '(tSa=G.$Z(uEayZQ.0~T5(Izaby0.cE!C,hh8w*kP3*k|s59_Vf)9XFM`o*Z}scs' );
define( 'LOGGED_IN_SALT',   'y08.1vtI,E.lDbzw[JxS:],RBzaem5GGG|gFou|80kZ !ly;_->m:xA#+:-*yrEV' );
define( 'NONCE_SALT',       '^~|-4aSnPcdKFOQpI+@#Nd}Ci>ctV9?~m%nX!{`tB&GgyM3YPUy:7MG<|WD602K[' );

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
