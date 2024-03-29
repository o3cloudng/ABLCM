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
define( 'DB_NAME', 'lagoscitymarathon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fileopen' );

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
define( 'AUTH_KEY',         'Qra<W&NRC}C2k&H7)1sIQ40?|,D.|+2Aep<W5]|n(&1m#nLf,7XRl7(o>%kd?9w<' );
define( 'SECURE_AUTH_KEY',  'G3Bz5%fR&Nx<cPvs,rf]H8Bx,Zgk0?)%o`jY=$1Yhto&$q 5$kdPX-u^xi BmN' );
define( 'LOGGED_IN_KEY',    'a@RL^iqRD?Q+-kOBf?v+TwK+lc5Wd_M6a6&LdF^*MsS ol)|7p_[EZwb%F^b_{%e' );
define( 'NONCE_KEY',        'V1Hmav y(C8!c*=,NIvgO|8j!d9iFR{z&k0TN%}:X*gzVn3DndeTXO@]#aB1`n6:' );
define( 'AUTH_SALT',        'Qgv;x9~ny}IVhcVs11,L<2`&}jKf3[,zA3`c3dDZI#q5p%U.%=|y;HqA3rUBY+9P' );
define( 'SECURE_AUTH_SALT', '#D2j3]SYt)po@-L10Eh`()JQ<y!mY7#,=t_3^aq1(i*~@. 2(Rjw&];N3=O%M8~;' );
define( 'LOGGED_IN_SALT',   'PgF{w6]WCXFR`Cz>Hu#+YE/_9bbi7Fu# %,y;?:)T:l/c^yMsYJ}TsH6cmVW7RSB' );
define( 'NONCE_SALT',       '|4z4pI,h?{;qKSp|}PQd|4{|mDej~k.#tcri@u$|_14hFILm|(e==%roUaW wnRd' );

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);