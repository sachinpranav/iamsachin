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
define( 'DB_NAME', 'personal_db' );

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
define( 'AUTH_KEY',         'RC!c7NIBLGQ;gJ-o)}%>c80SE#epRY>kgP {O~F.[4:$eo[&f(a?J=pS}lw(oxBp' );
define( 'SECURE_AUTH_KEY',  'zk,H4kWe+NO|zU7.YxK)[Ywf{}X+&A`5kP *S^R9N39&B$u]`5$J7}5f*zheg~+w' );
define( 'LOGGED_IN_KEY',    'xV{l/$6cI=pOYmc}Q(WKH{/#2oVB^y!9k-p:-,;7hc3Ku3nGVlVV+/kcWF1a}ER=' );
define( 'NONCE_KEY',        'ncnVOv,S]xw+}[b1|KdVn~IqQe^0GQ e.?T@}v%U_M D5j$P=RBS%p@f_3/rPwYe' );
define( 'AUTH_SALT',        'we^?]/px-j]w9Xh4 yk{3U+IBkIFKM*8]1V#Fd$ez^rbckl6!6N4Y%gonL@9*k|z' );
define( 'SECURE_AUTH_SALT', 'KzWCN[]$09@jX/Wy||!ti%+8K`lsN45M3>+ST]olBWqZ$M[J6.;H(fY@>pQe@%rs' );
define( 'LOGGED_IN_SALT',   '#+k]nA~%ZVlqku07w^{Tl[CeJ*.D6c#@q^&u[DWmG?!_.V^BP$0Qo-8&Z9&lYAS{' );
define( 'NONCE_SALT',       'TBiKY2xT0v>1(*)K7?dUHl^KkaMX*.#7u^;9t<3&jV%euHK0^^zl$LMST~GM+:iq' );

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
