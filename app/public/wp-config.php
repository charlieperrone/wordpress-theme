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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'F`7~bQ&6,VfIP9^K%[1H@)J#bC~Z-ycMn `=a$_YIpQK!,?!Kl2j|3L}3&>>i]c,' );
define( 'SECURE_AUTH_KEY',   '<Ny4T AR:1E,q tYf.%#0%^uvX^ehb$.EA24 EbP;@@ZGU/ .{>8VR+F%3s<TpP2' );
define( 'LOGGED_IN_KEY',     'Pma{GiOlzIP^trK)6F|[+<E_dH<$n:q4Qap5@=j[.>j?YqsyTBBZ1d|#.][-as-@' );
define( 'NONCE_KEY',         'daN`Sf]qS?iU5&H54yb~[+[cPDV+rpYAm5NDWITlODG|G*[!kfdR,c#y<Hwe4Ce ' );
define( 'AUTH_SALT',         '1G_/YQ`;[jMq=6.KK{IY@>${?Vt{xZw20)Z!TB^~I~),>7&8N4aARE!)Ha3s%ji;' );
define( 'SECURE_AUTH_SALT',  'HjhP/4b.gAHfHvRr:Us}P1mtHe?72D*+,)#/z(-?B(K`;@g9FXBgM_B>|3X3}OS.' );
define( 'LOGGED_IN_SALT',    '-)f ?d3UBa<o>eaIDFCS|e8#B/<uSM8G.`sE(1A%pL#lv=9jg5OBj]:whzbn.s+B' );
define( 'NONCE_SALT',        'p>m0Juc=(m-n%oY4w#)Nrm&^D3&8@z93[X1m?_W0F<|nml-/b/C{i!*kRxdNFDc$' );
define( 'WP_CACHE_KEY_SALT', '~Z[<w,La5l_SKrFu:?HwX5T:sq*-rzP?WZOnLyDqSr1%Zn2|t:HeP%3DHc*g5/xc' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_1ZU_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
