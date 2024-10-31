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
define( 'DB_NAME', 'alfie' );

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
define( 'AUTH_KEY',         '}{?UIJpJvUyM%<`5lY8D*Z-JV3-Pea]]35Dn[5?4azk5Ad=qah>ETsr`^KkgC +k' );
define( 'SECURE_AUTH_KEY',  '?mai@{?[dwzr@FPY2~}%,NPAN5~vzFq(8{A?`V0[(O.IpdZbZK:19t;$E%j9g4yl' );
define( 'LOGGED_IN_KEY',    '/_k`%JMx~auz5M;HT:jyvymCt;j@^>P1$l#0nf5X:(5$kc%wsK5`2:;:) $Y$7N%' );
define( 'NONCE_KEY',        'G9[[=<4MKn0HwR$Hp$0<DjL&* ~;LoGUa*-$$hBI=LrjeaWQjG_Dp&3`CI7+g/gm' );
define( 'AUTH_SALT',        'b))V[pdu@84Xs[rvtCQx9Lkmfu|5S$nW$-~nktx])[Yk[]}.W/V)+O!` serR:a5' );
define( 'SECURE_AUTH_SALT', 'b?v^<_o&,4zy=hQIVx!$rNja~t?ry|?]-Dpa8*Cu_]&-7*qsM.jRS80y-]9)fKLh' );
define( 'LOGGED_IN_SALT',   '&mChD|e[>ErN={Rn}>X^Vx38^yO_);|.)lgg;W(xgb/Q/3THPz.)~^ ag@LAqB?g' );
define( 'NONCE_SALT',       'q?4_RxjE?*:Os9Hf5hwLS|BnDMqtO1~Ot>@)BQvC[F2b8~h`L*E8IAW22TwV^j5x' );

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
