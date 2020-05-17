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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Kg;;9tnS.Gv5&4*L%Bu&qy[laAuG%TrA=YF8%PJk2%4gj(Aw0,#wACA/s+Y(Sq2n' );
define( 'SECURE_AUTH_KEY',  't.A3/TJj=0VPjx#$lambyLf/JnSYEWt_Bnv&GlgsYK_87OY9k p3YCs=kcR/Qkbd' );
define( 'LOGGED_IN_KEY',    'ET}p^sb<~~ioE8;49{zSfg1Q/rcO_je3R3iF2*Ne]zhnbF(I^TqsGjDjYSB1,.i(' );
define( 'NONCE_KEY',        'y(o)Z-.fQYyfEg}dRikF#=6V9!v=muN5yf$g?29?[P<e|~!,z/,LjVq;{;E-Gg>c' );
define( 'AUTH_SALT',        'Be!D#DvCeyL4|?uzevRQCX#[atg(3LwjBjOy73DEry?RP5IjV4`WluOaqShTc={Y' );
define( 'SECURE_AUTH_SALT', '[sG;J{uPhmJ[IL_5U.u]aZT$#/%!@4>D?^^PM!hBgyGG`58$pULXS(Z^4pJ4/9V/' );
define( 'LOGGED_IN_SALT',   'I8~ cM?>BQrb]AL0L,pU{Gt.myC1J+vQW&TI}[{:h@/AEYvwrUs;i_GP>>;Z5Rt#' );
define( 'NONCE_SALT',       '&LG1|sh8r|=8h&JfJ~&]QKhxF329$_s8/x(F=H mFli=lT$pn>ab@(tV>ruQ+(5O' );

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
