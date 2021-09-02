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
define( 'DB_NAME', 'learnphp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T2`:Qq ar&8*x^Gtc ;miL-7Z1%,,lWcV4;2kG5Za4+<kWL^nRnSwKQsFn53$=XS' );
define( 'SECURE_AUTH_KEY',  'M;R>Xt[f,TV+s!`/Lf*ui^eu4)BfdcR0]i`z&!n.qVkJRMMoqU5wlt %g%+D@7F ' );
define( 'LOGGED_IN_KEY',    '7C2_Yc}@QpzNSDs0t.@%}*U6Yt:`ExWc+#bIHUHzVvb:^|[7nV!?GI-Bcl4z#/{/' );
define( 'NONCE_KEY',        '#uHo*{NA?YFyU5YRzC;h;qNU,D1]rX&kDv]ijuhNJvb11(XSP@o+dU5yQ k.mY@k' );
define( 'AUTH_SALT',        '_&90#&z4<o}#GL48d9OiZy|p8a A>!)DScq mM8X0G54 773d.P_8 J7G/7I@Ju^' );
define( 'SECURE_AUTH_SALT', 'MmS%pU7W>D*SqZfRPxdZ*t_|{%~9,W+$A$W u(s2&&s},>W&B b|w |oGzX|X,l!' );
define( 'LOGGED_IN_SALT',   '%RW;_M[S7)CRyvx|u%>Zg3E@>GA/g_e&j7#el@/b[8b;.=wWC+|ZVVZ+X=-Y<+7n' );
define( 'NONCE_SALT',       '5xrZ=rF:>,07Wh;sco0$!t)1-bv!04nM>]3PT5709DQoz7RTS.t<6,w@Po$XpT:/' );

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
