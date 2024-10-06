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
define( 'AUTH_KEY',          'GUZpE+LTBla+5]r =uw,}?`!%,,>T1elnzH{z&D#*^^d*]ghbR@u6FlQ23cA#Tjy' );
define( 'SECURE_AUTH_KEY',   'WE4E>}|BGWk<wnV8.g]VEm bw[n9oME-}abqv60(;qJ&Fo<RY*R91O2t2bxfiW^F' );
define( 'LOGGED_IN_KEY',     'DPQO$L[^jg[}vZMBtU.}1R2&7X@Lw>2&x@Z?E;z>A!rx6yght]iR93yErB3}o-X2' );
define( 'NONCE_KEY',         'pfl6Ax6-eV$mSF-[<^~Dm]w2d@-!`{Doc@u#TGa4SY[1.qIc@K0pqRS?]f@bEcrv' );
define( 'AUTH_SALT',         'bO%^l`*!`,%+;s4UBBQC]nReAmzNhf:-A[W+[5Sq sEyt6Wpk;#Gu>:RX7Fe3o9n' );
define( 'SECURE_AUTH_SALT',  'IE,T`axrVrs})R[W|g@8(H?;$ly4k,14Nz#v&;$UV[x2)_4@#Jhfh1Hkigvfe&zd' );
define( 'LOGGED_IN_SALT',    '0a+FvM9.`~+z,fhu0.u2;9&lP0hIM;)QwbG |PNSMg,vScw7|qkK p$^F0SV6wp~' );
define( 'NONCE_SALT',        ')ME4y<icdQWaC,XaPv!1wm.Gr}UK=c[cZy!L~?cp[2sT]xff%u=@6>*pEA,QIW~{' );
define( 'WP_CACHE_KEY_SALT', ':kyCnXLtaBkKhkf{N(ROVof|drXxmb*SSdN@.6s=&RK?K_Xj~f}rjfl:fDJ !5E:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
