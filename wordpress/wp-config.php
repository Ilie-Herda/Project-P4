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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y.KQ73T(.Vfh^~!<,mM~jy:JLfrjE4W^jGFPvpiE3:S6mm+rpJEU*`Bu!bCnJH?o' );
define( 'SECURE_AUTH_KEY',  '1#_YIQs#_,&<wkBd9nF5>ah<[+$BQ0VAb~Lni!/kNh`_P+|z3t+q)f@+O}gfG|]D' );
define( 'LOGGED_IN_KEY',    'b)U)nFrc6XpgH.AULW;VcW!H>Ac6*C:VG6k_P#IceuU%4cel={$zC{8LAS98V&+Y' );
define( 'NONCE_KEY',        'VI<={l.1=_E9piEBS-&;c5Zs_RrYImYA+}1O!TgB{3,U}zwbo B<.$M6lw.dtugl' );
define( 'AUTH_SALT',        '={J=lc.L-caHEB:PE6I^da-;gH78X~F{<d-~Y&tNPs@:iQt8s3|H{t J{nRzPE2W' );
define( 'SECURE_AUTH_SALT', '{NJ:p[o]W0wAh],o&+0pP;PBA!igF1q4+*3H.YhU/csN?Pg-ATKbhHjHx9e>J$<+' );
define( 'LOGGED_IN_SALT',   ']aXSJ^czTQ?jjeR0/}IMz$eumXzz,dkA R:6]^6Qv+]T2,%$%{t{J;>MJhQJg_| ' );
define( 'NONCE_SALT',       'oyGF^vE/9*4smyohcms>z:evn)?V<k`CM?R[KC4u [@XB)ucL].5x~zDdR7mpcq;' );

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
