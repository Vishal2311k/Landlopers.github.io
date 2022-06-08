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
define( 'DB_NAME', 'Smart Travel' );

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
define( 'AUTH_KEY',         'd?n:Q{LQ2)6s1#!xJ%YF?3&uVOEAW&xt3|spsj~O$yH 2Xy,+eyg$HNNQo o}Y{<' );
define( 'SECURE_AUTH_KEY',  '<*RW_cH)F+EqBi<aq=-LK4~dAE}T<oefDTp5-,[3#77-FZ|!r<4}7gDr};8 p3G{' );
define( 'LOGGED_IN_KEY',    'LEE2X-#p,#[}KTth_;YtQv0b3t=rwb%O-+%>OcOx-j4!=(?U~4SOSLc)CgyNXGJ.' );
define( 'NONCE_KEY',        'osd?)IO2M-X0`3guErGoC1=<r~)49bB{I~VNC$PMBQ5IOsW[(s-BJF3l}=z{yIeS' );
define( 'AUTH_SALT',        'l<U+LZ~*ER^9FXTob8cm}/WrB5[f3diJ;cDnq}y@|K;s>QFtF=6uB6Q^jOkj.z/^' );
define( 'SECURE_AUTH_SALT', 'b9+`>o))?ln6VCA5OIDxwrR-/u{C[%4 n)Me$vdlv6*>oTT`Zy.J*5NEJGtGQ= V' );
define( 'LOGGED_IN_SALT',   'U]u[vYy{0tmd M`fO*p?_@}9Q1{2m7a@$b,q0i& auBXMj{<H]Fj6_m1M4~:`F[X' );
define( 'NONCE_SALT',       ',W<))3jBe<_|)&Byu4fIkO0I 67:]WJ8,K7Ve^)J^C7vIsvAi*9QuS0nNvF&q< Y' );

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
