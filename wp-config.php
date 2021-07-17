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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'z+i+`bu++4wB|9YmrEnJ;D=A^,AQ7]~)bGD,M^,5O#i`<A/u7zA^(g5{~p&gkjhv' );
define( 'SECURE_AUTH_KEY',  'm`r&sursv{P8qa>E<:/V7VZ^*17bC[|8q9*6ABJw.GS-&zYYHWO-rX7xORq`U]vP' );
define( 'LOGGED_IN_KEY',    ' ;AE?(Fv:j%L_^0n`P4-S524q|c3@tw53K.$eX#J,U1c!RJ$@n/`0MO},cY8WJ((' );
define( 'NONCE_KEY',        '{O.(;Ge.D+T%F](f(7^CLtuFQ-ZWi;X&~5y+GV5kzp[|U:[ FW$H8y95}& +VK[X' );
define( 'AUTH_SALT',        ')aI:y3jl4yQ*]153 fA4?: h@FuwKRG}>Z>>!Wgfs]`0OsZef[#ie&,tSgyPeA]l' );
define( 'SECURE_AUTH_SALT', ':_r-AZ T4Qv*4~:#e&]HWp.7lWm(4NktiP8mkc@I%xY3_yVli ZO1}L!r1l`t*_$' );
define( 'LOGGED_IN_SALT',   'F}IHbQlacm)kotW]0qL`_ R+cP0N_ha)S$FV>!-bk1F9m=q.Rpa4ikylc7/B;0B?' );
define( 'NONCE_SALT',       '?}S&mWxv0G`Zj>kU1C[`v5g5=&B2DdK<F<uI>0z{U-w&K@VEV(sMj(UE<:&@g2vy' );

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
