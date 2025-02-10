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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agrogania' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'c=VuA6 $LBjis:Wyzt&#Vu+{1T_Z*C*>=ZujCUbZa-(/*sQFb1IvV|hm/.*:sBb~' );
define( 'SECURE_AUTH_KEY',  '4c05OsDVG.*IuBK3W7gHqh6!S4paJh_ee6nE-[q}Dt`>P+8~9+}q1}~F}B+Fte},' );
define( 'LOGGED_IN_KEY',    'P dT/xOU?(z5H o&rdS7^(Rf>+r+tT[i5_x%.1Xx!#_b`vp#*chc6B{Fi(G$<P$C' );
define( 'NONCE_KEY',        'r1>#{p;BfrT3.9,6{AZRK^Vhf}scbss|kK2!XaFd|H8`u;f|S xI*8(hja>b/JZ@' );
define( 'AUTH_SALT',        '39c8`a%vQCzLcY<pK`)f@cs4BHi!Oei}Mi3Wn}IoK9z[/ Acpl 1Hy#(h:1XXWoR' );
define( 'SECURE_AUTH_SALT', 'sLD-U`T2n5!Y$M4oY T>{+g=R5(CSD~Cv1;u%qYJNm:J3V.hBjP;0obpP+QA^`lw' );
define( 'LOGGED_IN_SALT',   '8(66,JhxTx2P>uNR7P64a,SQ#W=aDrKTE_FBY:k|ew{Bn>$[Rc3.xJp5!Gu=wPWr' );
define( 'NONCE_SALT',       '8LUumLZLf`FauA1WC@Iw[C8vz7^sk4!R4ucxjuzc(|-3bTt_]%(E_Ofeh3gk6P==' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'SURECART_ENCRYPTION_KEY', 'P dT/xOU?(z5H o&rdS7^(Rf>+r+tT[i5_x%.1Xx!#_b`vp#*chc6B{Fi(G$<P$C' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
