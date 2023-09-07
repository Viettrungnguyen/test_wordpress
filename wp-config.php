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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'E~N,H1p-P[^JJBsx;gm<51:M V5j,(l`ZRJd~1nlC%rna0jM>90[}#lY9)4!<w&F' );
define( 'SECURE_AUTH_KEY',  '<(j*9T}c-Ax|BhTP.Rs8lKhn2JlJqH-+eQ/Fy^X()Mp$r:Eq*f21G3=N?{@r,(sJ' );
define( 'LOGGED_IN_KEY',    'Q}[0BT:^<{0LFA _(4A`4R}w9Z)6*PC)yDz^_P}0[S8Jf7,a@x8#bF6[B+(0Vmd{' );
define( 'NONCE_KEY',        'A]f3jsU0{bKg&W,<EJEr{0}tT0.)$gNm+x{ijzh G2 IDQnI=o/%8(MUEs5Lro9O' );
define( 'AUTH_SALT',        'h^at>4dYKM]_h5.PfCb 3#@3DGPwM%hFcQCI~mhS<Cy^$`t_DrR@8ZHPj,hS|yzy' );
define( 'SECURE_AUTH_SALT', 'QDjQ#r#({3zO1E-wA_e6dj%*ZBCdQ?0[2amiJAUw-^F:`}5qc{KO#gn}@dfv-En%' );
define( 'LOGGED_IN_SALT',   '`)KP`kt-8@8/}?9.rF?mPCE6&S4UTl5tW/W$r-^3;]>JkL_4mufV?I+h9i#qGSEE' );
define( 'NONCE_SALT',       '.&MeZo|g.+DRx;|}#<7ntX:?V8/1zSnwP$A0(e`Ijdumw16<&1,MOMSo_OKzm<:*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
