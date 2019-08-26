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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arseen-40' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MyNewPass' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y7qh$1-gYOiQ?nZ+06CuNF5//Who&;WwmoEp!6{_NXNDHLpL0.XeKYtFe[oNS~+(' );
define( 'SECURE_AUTH_KEY',  'myL/v]%Opn<$Q;@D]wUI^ZsBnpGk.lklo!*8=:cyIOFV7WQDpX:>?[7X@~?>sygV' );
define( 'LOGGED_IN_KEY',    'TPzzeZ5a@s`Li+R]EUJ@.[uqj.I%E]4(J7Xkw0|mmH|QJHQ;B5ZBz9^A3vyfSKBE' );
define( 'NONCE_KEY',        'no@wyH>X/-7{P;-/R8=,3d8/SH><=-xd]Sp3!8lBVf)#%AUo,>nyvTrMNWn2Zy+0' );
define( 'AUTH_SALT',        '6Hr7iOf$CtrNjryab{xeqj*dFzFMJD{xPl;vCBaUDu=0U_z|7^UC-D=WB[h0oq-n' );
define( 'SECURE_AUTH_SALT', '3*=K3R2Optf=*z@%[K[ED94.Wka,6ZD0*X+FckVO>q/fw/e8S(<my3wLH]TG.[TH' );
define( 'LOGGED_IN_SALT',   '!Qj}KGMLC=*DRc:t0w<oDBH|w.01|O!f.D[,b)ym,OmF?P{vzMDWHiFV*Zm0N`j&' );
define( 'NONCE_SALT',       'pab+6a[m;=w~m1FsAj*CoXuK-(FvEeYc3j}<kg{!DnZ|LG>Vq.nrz{ocLNRWSGj3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
