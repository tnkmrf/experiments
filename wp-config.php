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
define( 'DB_NAME', 'experiments' );

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
define( 'AUTH_KEY',         'EnyS84YQ^@c/MPiNBDvXs.}Jht+FP:s_KuI3$aIy^*^8Wx58|b8INJWf&D^{K.!*' );
define( 'SECURE_AUTH_KEY',  'N~Lb9ED)6/cR:;>i)71hcgi%a^=GN( /)9E>K}b9RZJ[!?2be;yw=FA<C>CI:ug;' );
define( 'LOGGED_IN_KEY',    'j__sfjtuTNP(7[mbDL)3)MWvCuG^z@$LotT+j`2$zD{Yn@(~XSo`gGqf9gR520YJ' );
define( 'NONCE_KEY',        'j%~,J`_lo!&w>F%%*axysB%_c_ZsIRC75M0}+QxW[ne!R(;u!0VT:Av_ysz#>zMJ' );
define( 'AUTH_SALT',        '(e{bXlW*4T/0CKp ]YFg;tfmdfr2MM;G0~(4{v+-*0n>h.}Y2pR|nh#gvNe`i%/Q' );
define( 'SECURE_AUTH_SALT', 'RFd aJ@/A, ^3El13|bf*%Km`]-. 2T2qU,kd#thQ[eGMM5ZNrlnr|ExpB#G&!x5' );
define( 'LOGGED_IN_SALT',   'H_8z>92@2$Pqu65qY7eA@{E5~pGrX/EWM6Hct.S}!YXh+5gm-)k_Sl3WK%Y02^QA' );
define( 'NONCE_SALT',       '><c1h,<Om>7fk6Qg0JXg80(4jj0xNa2L8!Bv_~;hZe.J`1KfdK*PMC/D``^6TZk#' );

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
