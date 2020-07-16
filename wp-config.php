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
define( 'DB_NAME', 'marcelo.moya_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '7119014abc' );

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
define( 'AUTH_KEY',         'qlhhwkphA{>vC&|%Xp{<*Ab!*L-_i;tmK7b(S.jB[lbtV%3:(8(=VqtO/(H tC=Y' );
define( 'SECURE_AUTH_KEY',  '8knAYT.)ds|R5(6#->s`WF1gK5[Xqwu_Se)jNS:Ur`3E&P#O4A7P%25+mdp[j7xL' );
define( 'LOGGED_IN_KEY',    '>!wOgGG3uaOP57mojQ#M3Q4yEPTI}&a[^!RXuaw4LM3}^( )$aI2GYach=qjAPB$' );
define( 'NONCE_KEY',        '+8~~yf`>F_od$)ku>=a$o~<eq _CuY&/zU>0(o;n6WT^3[h:Jp-BowQ!Nt[t+b&C' );
define( 'AUTH_SALT',        'K(`%=):*or X;Ekj:y;Jc*,j|JxwBxa:C(/&2i4]<d])*_[f({b9[dJ:lyk=yt!{' );
define( 'SECURE_AUTH_SALT', 'Zn^~Y$4d]YKH(l[MyZp:4$2^i#B!E|N=Sf`TR#+NWH,c5d]+sl.Sm<,KeIGlDgid' );
define( 'LOGGED_IN_SALT',   'T- m;J:vce7}C&,ebdx0j[iNerl+j+cYR;q4+^fh$o]kWlPdrNT/H&tYlCe_(ob1' );
define( 'NONCE_SALT',       '47u0Owp(12KI8D?TfPy/-P*L_&t&u=!2U8B%IG<Wb-z9~n~D_Y-H@VoRhu/TpiCJ' );

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
