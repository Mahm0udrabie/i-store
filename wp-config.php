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
define( 'AUTH_KEY',         ':vr)`J38({f{5VJ0$6JQ3DP,{ueQZqC-[>Zc<mNR8fyMU%vy9;O~_I$yK5P*K++B' );
define( 'SECURE_AUTH_KEY',  ';joWBG;Flf[YE-axb~@s[=7Ur=a{s{6KesoayxutxvcqumPSOr._IrSZj6}i1{hs' );
define( 'LOGGED_IN_KEY',    'q?8:-gFf33)BX{hZGwt1pwE?Ny&BigUQwY8MsySQ*ef(iJ?m,.jSbZ,vWKM3fmOs' );
define( 'NONCE_KEY',        '>b5@ik+8_xD~qYtXvmr|XnXOR~03*~$_g2>GJ1(9_Ezx8W8clA!Y!s@X{L=l$v`u' );
define( 'AUTH_SALT',        'nQe@Eb=co!C5t%.*h$S/9qO.Tjr=PwP!Y2k?IG>,$tT!^q;[_Wh|c;HOoy-yfhkU' );
define( 'SECURE_AUTH_SALT', '66+.H2K~gtkl=Q9wn65}VxF#kzC1{-wX{19jCs/>&q$0x{aSwJP.5u}quRtJHd2`' );
define( 'LOGGED_IN_SALT',   '}ok2>~/vA6%5o$q:xC|#,vd2IaEG!dK?2[Bk,uzVBaGG6@o(*`!N>??_ftjmRNLc' );
define( 'NONCE_SALT',       'oRpFk[;uy#<%Upi}PWC$+.?7:p4(KVhV5s!0ynX RU-^7zBxj!8Oli?S1F$KA(zI' );

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
