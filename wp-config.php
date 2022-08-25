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
define( 'DB_NAME', 'nalv' );

/** Database username */
define( 'DB_USER', 'na-latvija' );

/** Database password */
define( 'DB_PASSWORD', '2Rec00very9!' );

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
define( 'AUTH_KEY',         'qLD!12K+7{ u7Wd^d_+do0jcf/Y{&nw<V;2~/W|EfB)+07c5[C8.SINv<+gAA8,q' );
define( 'SECURE_AUTH_KEY',  '{W!e uv+3*T>%s%)^jNg0VP7]x$tCoruCpXm<5-$6^K2x#~R%PS 5cGH|)ayB51 ' );
define( 'LOGGED_IN_KEY',    'bYZ6_#40&F?L~)`[_Aq0]a.719+JkHe<^Z}&v.jx_vxZUpG`9]iR#84]cmD)_$K5' );
define( 'NONCE_KEY',        'b>&wrKqYn?QJ*X,N#,*n8z(bwGB<}%nLf=VU63jPkb$c.%XTm[+`hpo?[vPywVSC' );
define( 'AUTH_SALT',        ':FXb8V^0ZR%9|[GImI=R8HeLP2<D~W+F$7+>xxPX-*+_}3f310.L@`O`rsu{Fw7&' );
define( 'SECURE_AUTH_SALT', 'W!Is[w] Xd(OU{P7cILbLrNAv6Qyuk_a|oy0>..d2=+3}S(@d{,[8^^Z_yM<^Nf}' );
define( 'LOGGED_IN_SALT',   'pfRIx h[=:!-d9aRk~!SJxr/N&h}[-a?K8+v1*IMHD&R?+?M[]fG%dWrdq5|X6H=' );
define( 'NONCE_SALT',       'oMy;E!fcAUk]|N3h+7Ko&%#Xt[LZu_`<QvH`STgDQCYRAs67f9*S9A>.k*N0ZayO' );

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
