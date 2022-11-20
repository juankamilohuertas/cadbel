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
define( 'DB_NAME', 'tienda' );

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
define( 'AUTH_KEY',         'lI:fPZk)@,KL_-BfN(J0pfI6s=:BnLj=~?_pqDSzm^0vHq.#-:pT/V`i &14?;m)' );
define( 'SECURE_AUTH_KEY',  '/hYCS.ln{6NID$cKDw1r>gm*.I|54kaY55Ck_R=az;5zE=tT;jlP^S2rz=F3+#F>' );
define( 'LOGGED_IN_KEY',    'HMofk.XcZ^kutkr@=YPd|XMF,oLnyg=3Smi;U?v0~A8::L2,WhtH o<g J!6/]Em' );
define( 'NONCE_KEY',        '!g AjREoAI^ d9hc AMnoBQN Mse/#!X<:TWWg-ZH7Cc_p1vica[.NxbBVU]j$sN' );
define( 'AUTH_SALT',        'LA7mxCU0-Gi<F0Xf113BobN!@b,k E}:JftTN4,W9dT:Xyqy8e)Q9l{~bjx|9O9,' );
define( 'SECURE_AUTH_SALT', 'l#>`O7ZysLf*11:2DhL}yqm2Fu/bY+%G@V%k}^?Gnk#C~^P~}ZBX/@~(Y^M#LVKX' );
define( 'LOGGED_IN_SALT',   'Kq(l]#ot|[f>9Zs{`W/t)tfr~dwZp#0mz6}0u9ji<mqne)#R;B/V> },TF<L^(TF' );
define( 'NONCE_SALT',       'AmGaFy{R[ Dp$R$$:[xGm>N!fCewUJZ#U^aK}PEitzz(J8.ICVT=n#2 wYWkqAA+' );

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
