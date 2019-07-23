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
define( 'DB_NAME', 'nelsonalejandrosazdb' );

/** MySQL database username */
define( 'DB_USER', 'nelsonalejandrosaz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret123' );

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
define( 'AUTH_KEY',         ';U0B,5~phtTyhY*.HVcCCG~0j>hbthTmEh83[15?WC=gRN1(1nOEuruy/W<*DJ-(' );
define( 'SECURE_AUTH_KEY',  '8sR)(I~3qYH9dq$0UrAt@Vf%=Z1aA~RgIyWl$@C_C3|,|VK;kC%p-afjU_i40KVu' );
define( 'LOGGED_IN_KEY',    '@BaBbF,Lkd!qv;%eu% tWwZ*i#}SZ7*:Ll05zEFRQ|8F]*tT%VaTtk|A)Qq5_N(^' );
define( 'NONCE_KEY',        '$x<a>64{]yaKPuAp!O]UH*+dE8eq*73r1e!mxm&7|?cQPV@0XgR!P XJ+;*ky1u2' );
define( 'AUTH_SALT',        's6ocN-E*%?%6]HWKg1DwW3<<b^ &nfM<6Ar;[D$N@t!97My;pw2e5i4j)S *Tp(k' );
define( 'SECURE_AUTH_SALT', '.OH4JG&[^NuKLzkeG>y:3aae0cPAT+5 u7LiWHe1=*eRzQMemn#a@yN*nADoKl[k' );
define( 'LOGGED_IN_SALT',   'r?EY~WjACJpS6,8a7A4mq%nFwnmgqDk0P5><2Fo{W^}GE&4(g*{gBZdFW,_12I-K' );
define( 'NONCE_SALT',       'RsZjt*M>{kNGNd]S04^hm!^xQx>/IsE)h#ZuK-J<;1rY%4>P-t0l74e0d>zrDPX_' );

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
