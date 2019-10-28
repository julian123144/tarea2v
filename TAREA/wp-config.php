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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sistemas kapsu' );

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
define( 'AUTH_KEY',         '06fpS&V}qzfkMuo.g42}I{02$C, ~y1]P7ma[n*OR(1K.A0mUjd&~HyPXWzTZSWT' );
define( 'SECURE_AUTH_KEY',  'v!w=t(_C}qNs-]]!B|#}Iz]F*Rp8R..7(l7 W85hX@0saSi#gSBz5.Iw(/ aGW6^' );
define( 'LOGGED_IN_KEY',    'u|((U4S=_JkI-j$_69|{:d]?]Gl+6nsiky1ytzE;+>^&_e)bW]0jHlLY$ET0f$[:' );
define( 'NONCE_KEY',        'M211sK9qO}3ocVPP.oc_faUM|3nEU]%!LAMy,z0);n#^F@(1f(/%F%Flb=i@I{PR' );
define( 'AUTH_SALT',        ':T^U3at/v;(6 ko#/gv[u3Ij>}eB@cJtl xJcoxpS 7+GHy[(Z`O,wlc[UJlk4qh' );
define( 'SECURE_AUTH_SALT', '0keNf{#he=HnJrU0;3C4}K:kb>[U*XR~0E }mf&4v<fFYyU031ob<;dN`To!0wn,' );
define( 'LOGGED_IN_SALT',   'h`m`I-(FdiL6P_DOrDh(zBCA+0*cpl%eW%:G0fVhjil8ZU&wT{giZ=N+Wlz[(jXu' );
define( 'NONCE_SALT',       'dT,cNB:zk_,PnX,`d6,<1dW2.g4kJ`UuJ{}.t#Qw./A=.c^hvPSvOnh%;&O  f2[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
