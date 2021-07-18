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
define( 'DB_NAME', 'personal' );

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
define( 'AUTH_KEY',         'c+$*KTgaf;EMR0RRpHP`HZ~x47N=7{N|mKH{kR<pQkybn[qU~zuB_Brg,!.NN$A%' );
define( 'SECURE_AUTH_KEY',  't?4m-UxuIuH%k.^]qg^+S,@lD_G1I(!-S+#,9]E2@YzRnWjW%weDU8,9uXzosem*' );
define( 'LOGGED_IN_KEY',    'i:B3f<Hw3/gC|sY6A$A>zND}6l7!;]/4c?Rs{MApNVi|ozZ[n1C]Xj:OVUGn-[.#' );
define( 'NONCE_KEY',        '=wumD~`` m1j%hrJVC=t.>P5,d](R]P?SruY_,p1-IR(<r!^8DmT.HYMzso[)h`f' );
define( 'AUTH_SALT',        'xx)E@<Iu>kb2Vwm!aF+32w ;!],>nlSLflEfaPGOc}3V-I$,MmXW$ka|g@m,ckp1' );
define( 'SECURE_AUTH_SALT', 'u[ya4{[hgwJ g7yo<(FbU6u>aQk(~amc@~y8O*KP`&kkjGVjf6w?i)8pm/W4ZV[X' );
define( 'LOGGED_IN_SALT',   '|Y!H0_!9g7Hj4Wa,P2X3hm`?/;c=7{a{)IdI$7/X$v0jT()*!Paz]cMcQO~Ddz<<' );
define( 'NONCE_SALT',       '}x:3KX?UTZf|>#K&8q*~DtJtn~G94q9bdy/(6B0f&yvh`!mpC%,X/~:k*9w81ms2' );

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
