<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'WordPressDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'HF-n*Cb^2o>[X)|dyK^%A;&gc$k<?mARY:P(~1<Wae]d)i $*d }vd-.?0l-h{c+' );
define( 'SECURE_AUTH_KEY',  'QDJESZ.ZG4ZU}hjJ<!XP5!gW8`rlD*2cB%!>ZmZvakPW|j-t%)N-ge!RUA3$Vjvs' );
define( 'LOGGED_IN_KEY',    '_SY(O wI@0?k2IowhXzBE=l,}V5-TWiL45i}P$<@&;I<867KV=r/?(0j2cS{DRS>' );
define( 'NONCE_KEY',        'W?8C]2-MYH~x*h_:5zoJYw#Ws9tV8vd*G=y%?IB#@7oG7fiMMv@6|At`-GA;m*u[' );
define( 'AUTH_SALT',        'sLVJ&q[b9PZRN~#kBC1s0K$>l&_Lr9tO;.R9BC0Y*QT*Om`OI1=KhhS[#9PbEhF^' );
define( 'SECURE_AUTH_SALT', 'fEK+kE{|Xq^]/K,.jx>W%Rt$@R:ioLsMLSiq^N7FnC:|$]J!qIf.,}Hru+:bP!iE' );
define( 'LOGGED_IN_SALT',   'xcY(C&zek|d,:==-K9*E7X7TbyCNb5b%_>s,;`gjA}Ja9z*g9^[pGSj,uous!iBV' );
define( 'NONCE_SALT',       ']E ws^VM2z/VH=Ico2Q<@[}`[H}j8P&x)BDP -6-E<xIh|8*pX[kA4Ay|=E1^|%-' );

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
define('FS_METHOD', 'direct');
