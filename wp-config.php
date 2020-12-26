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
define( 'DB_NAME', 'serp-data' );

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
define( 'AUTH_KEY',         '7BdLhE/M`13o?pTYzu$F;p0QVVYOBDo-|#)Ppx%3;fh+ hGlPR.A8x9`YKE~(?E3' );
define( 'SECURE_AUTH_KEY',  'qg4r=@*bD((SBu}s m$U6NVx(mWl{ZF>?GoZJNc%SFVe&x829f<L-HNfz@)lWOqv' );
define( 'LOGGED_IN_KEY',    'O+R#N,V5^&XN7pZ&ZiHFV&.;:[N^v~|MjhqW+@j[^@g6>tF_.D.^sqL,f,62rjl9' );
define( 'NONCE_KEY',        'U(J#jMwV9h(A25*,0K6))EL)#d38U:t/`l@;fTH(~5JO)$s{{|7:^jr~p{E~.^h{' );
define( 'AUTH_SALT',        '3#yROeV;@|A1wpcaV(k0XWV,<??&gFk^~BICF_]!qBq#-pri4XocM Z)e2;p 0Ni' );
define( 'SECURE_AUTH_SALT', 'S */qRXM~/hOcZiu{Ud[cV9+qg<xL}Ls*, 5kYom5XD|]!,g3jHKk>w.S6jSWThw' );
define( 'LOGGED_IN_SALT',   'MV-|gm_N_F{v7<[,(In/QOB.XJte6& %*s=eh8n8&nk~PIGkp*u>7bPc8=LYh`~l' );
define( 'NONCE_SALT',       '}?72ha^pLP`irTH+Z&WTs+8K8X&gMM2]baifr93KLu5aYN^VWKuVLVN#M:i7+zxi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'serp_';

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
