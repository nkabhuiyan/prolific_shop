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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prolific_shop' );

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
define( 'AUTH_KEY',         'H=YI&T$rTYlow{ e*GflE#p(zNdh{(CRzAuU1!$L+;DaqFY,$,ZO6pO<p-0XUS(O' );
define( 'SECURE_AUTH_KEY',  'LI*)>p,O,$5B{*6Q}{.]H}5Y20$g#i:R_hWDnV9&b.U3#O%E(RptvpvzlvCY&R?e' );
define( 'LOGGED_IN_KEY',    'KHbMASsp85i*@AzeKJ xV{yEvLvHz[5)7Bi)z)uHf!|>Vkz[LD|Ofa?< BNb8ggS' );
define( 'NONCE_KEY',        'SCYUC7{^uup_yyNwa0DH<W&^<=BeiQ]DmC;uu]IKUTg/RZsZMf?_kGW%.|>x#y,@' );
define( 'AUTH_SALT',        'bqX2+$vDn{[i`2i#8,LeZUv{L+()Pe3v,iNZ[?$# YH3;fJCfCX5LvRfkBzKk4HJ' );
define( 'SECURE_AUTH_SALT', '~c`>~CUTZIzIv gz0*W)K[e~u<.$cVYn2|/^~bzAca:!8yJre;sONuZVjKELd<gh' );
define( 'LOGGED_IN_SALT',   '9Ol$kl60e1)r$<+6{]|R-Kn([FYU+nm49LZ`spx^g|p9-pi37_];|p,#MjC^pxWP' );
define( 'NONCE_SALT',       'B#66m(nfJA!fY-R*JzT:)wnI_trjWfpHCJoMwbRGpmdo5B8|DW=0Cza-,KfU|6%B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
