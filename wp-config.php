<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u329362820_pF35m' );

/** Database username */
define( 'DB_USER', 'u329362820_s7CYP' );

/** Database password */
define( 'DB_PASSWORD', 'nHy5LOfVum' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'tsa^^;ir~f ;.Te,pAR7K2]Lzjo$#?b!dh9?~#:(w%@=:T`d<PMhh==P18:6)a_.' );
define( 'SECURE_AUTH_KEY',   'X<$3ht8[;D )9<Gx,zjs/x@a-<$x5SJ6qnp)fWRLtC3`Dtwy.NE0Q^t1)U#wQ^df' );
define( 'LOGGED_IN_KEY',     '|P(S,}wy_PRrPFnz(2.AIn>.^O8m(X=rhSQobGA&|w1pA,sDQppS9kgKv!Y>s<<-' );
define( 'NONCE_KEY',         'mgT9pL<53lN`1bDn~V,fuA5N=)B[:e)u6p8bp#8:=BATki<n[JE1)}0L21`OzGOF' );
define( 'AUTH_SALT',         'sP:D|+Wzz_9p^B5n8dv}.yMVjYzw%4Die}OVlD,r93z7RQ3CK1lTEM%[bC:>IM)i' );
define( 'SECURE_AUTH_SALT',  'r$CS7_q9o?c:~IU%to$/sA_2cRiXk DN$0@2v.XIPSd3]ezp~W~!@4M&_{e}88mK' );
define( 'LOGGED_IN_SALT',    '~.e-;0SkG*tk`V%O)H4Ck+/DMpO#N9-<?fS<K^f$?`;M9&|U#P-6Wms#tdIrrI!9' );
define( 'NONCE_SALT',        'UsP:r)gm,rtiM6nImjo@?T*sN/&]rY6gEXcPs7YH2h0mJ<UY#H<cEo5~8+>uP2=I' );
define( 'WP_CACHE_KEY_SALT', 'TCw&c*odis1GU6DJFoc$|Ujue,J3?Do+?^z]&(|#&I_ZP<FhL/2R_?*f3Gu!R{l5' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
