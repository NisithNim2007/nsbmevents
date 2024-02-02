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
define( 'DB_NAME', 'nsbmevents' );

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
define( 'AUTH_KEY',         'uiv2  c$4LAB<yw$ZQ9vqKw3YOln9;u~n7n/[/x|kUZEiX<;jmIhIA|mWaC  4qH' );
define( 'SECURE_AUTH_KEY',  'kLbonyajsd|rGr~UOQ;c) 0(vFdhl%0i_!.N7H~vMYIA9t&K_ ON_3x|8VL<YR0}' );
define( 'LOGGED_IN_KEY',    'c49DwUfk[;BD&_ >fUxdTeAEqSNqSWJqlVFW;ATpG3/E6[8Z{EqOafZ5$m,f1HH>' );
define( 'NONCE_KEY',        'sGb_jR(<,L?w4ZY!=~Nskbt%u`J,YNGFi4XB>R8}`R|!ET,ub2=BPZ-YG.cUZX{R' );
define( 'AUTH_SALT',        './oZM&/1)5`DLH[, fB59sQ=-txGlu6.ny_ur}}SWcqUeDkzJfjC[771vg+feAW@' );
define( 'SECURE_AUTH_SALT', 'X$AVnIHLqN*aeb=H~Dew3R&U.LBiLNQc|:9-Tgg~lASA{@]TWBMrtG69}yG.4,,n' );
define( 'LOGGED_IN_SALT',   'mo0_|!(Y> .(DtK++t8=CP6I/U6mW--950Z(G=jT72 ,roy>C(Yqr.[o5hvHy%%r' );
define( 'NONCE_SALT',       'voYY?Bm:koH^n#UgKhn3Gi_AM`7@u073Z|NqeIWLYWBd.meAcW_X+ mD0,;mM1p(' );

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
