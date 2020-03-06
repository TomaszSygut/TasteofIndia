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
define( 'DB_NAME', 'tasteofindia_db' );

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
define( 'AUTH_KEY',         '<<Hs.VaS&u3J-KVM_I~TNjp3g/!PJ^zL=UR#uWQv+i8H`v+FY:1^wGhUZ=afd[ZI' );
define( 'SECURE_AUTH_KEY',  '7:rY( ~buXJeoHo!Q_W>s9$gxu<tGy(jxsY.vIoSA<tD(LW03mf6+$Fth:E04{-k' );
define( 'LOGGED_IN_KEY',    '&Z#|[x)+j1R1so)6*2w,YuwXTfR+TNxV6g/|JHns[@{mQ*)[gxdL>.*aRMlYw];V' );
define( 'NONCE_KEY',        'm!PxG1eBhDN)($Rxpps0TkM;1:6oY3qyB1p9eaWo]6bdIaIob2<s_]Rv#W[zZ(t1' );
define( 'AUTH_SALT',        ')Oz5R[__[H`Q.*rM1!d7VaCgWVUP~Vlk++cC7%%5MAv`O%J|LGyPTKnDusGo2=H/' );
define( 'SECURE_AUTH_SALT', '7w30BYsqvtiBpIwNM.rdj5F{Tiz_/`5MIIl{]Imm}e>/n+`pdErjZ-1t_P^P!0#m' );
define( 'LOGGED_IN_SALT',   '$s8gmc1 +aXgJDte>>~MzbN:-Ju(K!aw.+O7XnPP$Z)vUS[IOd~^[FRvzKyK@)Wr' );
define( 'NONCE_SALT',       'yPt$Ch>Al T#=(z#7.@bc<4shspnWwDn;rd67phmXxijS;%rgj?NlcS,N4Oc,~s=' );

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
