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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5i{(^Eno^kAeN^t+s%mfq* %x46~thMCSX=r-Bp2:.Qx[W~C({wvqpu|,^Gs2n C' );
define( 'SECURE_AUTH_KEY',  'TnV@d<PnC/7jZK~!^-03|$Rk=Sumvb?InUmn8hWvs*Rb_yyP;IMNU8`i6T9qDIA?' );
define( 'LOGGED_IN_KEY',    '7x&qmfg^E_NqIbhdUcCDwzSdQsrWkkX[aR%PIa>PbE~<8 CMZOQmi%bdztpqoIb<' );
define( 'NONCE_KEY',        'v>l gKKzNe|b0}N$(}&S[LIhT)#$eV`l/sX#S%[K$7%~Go22xKMfUy/w?{E4RER)' );
define( 'AUTH_SALT',        '9hx6_G;&mgMe1<<lQ[ne`B{sY.d-]WnH!.GK(o~[Ba!Rx%n,{ip nd1M[OQ4t04A' );
define( 'SECURE_AUTH_SALT', 'A8S>y_X%YCdUzxd6,tO!T`)<ovma<)-AQV(G%T3Ue z;81j7=|K]MS&gF*roUirR' );
define( 'LOGGED_IN_SALT',   '~AKxc<OG`n;*vIeJir4/[}lc`2#X#Gm+T=~/oC{3`fSDFgB_6~6JfC3+QIn_`%Ul' );
define( 'NONCE_SALT',       '| cir04_$h}4|(e{!|ghX2DltS]aSBIolcfWdmFqg{F!gQV-ZSucnv*`gNL+3wN/' );

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
