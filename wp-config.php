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
define( 'DB_NAME', 'godisgood' );

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
define( 'AUTH_KEY',         'w6zdIm2:k*C+rPR5I<TN]}.-::}sUXX9=|O6JoX5&v/)p4IC3f3/YxJ:dGhpK^!S' );
define( 'SECURE_AUTH_KEY',  '&+QyZ*ObuMC;6-KDmk,(G:o.Vxj8{?~?JW!wYl;|2fN HmFLzJ2.y-uLmfS@F(_i' );
define( 'LOGGED_IN_KEY',    'ePSsvMZjKO8D/^N2]EFhn![m+}n<F`03WTU0)H.Ck#>VF<c]!M:pI!?=aA1l[LXR' );
define( 'NONCE_KEY',        'UJq*o#2l:~8jyB2m/![`lD5#43wdwiHr?/<wBIYv;]v*&:INuR52!&Oc}3ZYBB`_' );
define( 'AUTH_SALT',        'n^)%#)x3} UX6!W9/^z(sPXg@C@647g=;5m-d]3lG1W!3&zO*^58,RD!V%YY&qK6' );
define( 'SECURE_AUTH_SALT', 'M,Cy4`lL8 1wZb_#T[rp&7<(Oj{5NLLUv&)ov_>kaa2K a#~`f>d@1>e&p}x.t+F' );
define( 'LOGGED_IN_SALT',   '~sf}oz ]KKOqRvm+2$D#K8BP%GkITS1XoSZMY`}Qu8V)S}ezl5Lq%ZKGRQ#IOONQ' );
define( 'NONCE_SALT',       'J=v=wosp|bjsU[OTkX#@v{qF~XG|z9<,y^*M&(^joW?M.Sj`]T6c#Ek)}rggE5jU' );

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
