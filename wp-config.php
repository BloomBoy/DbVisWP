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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin4298' );

/** Database username */
define( 'DB_USER', 'admin4673' );

/** Database password */
define( 'DB_PASSWORD', 'XVRhxworw71PHZ' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ChHX:D~EA#R<Fx6?xLkHqRXf&;gt#<GY:aD8Y/T~#;G=?Xf5xb!? (z7L*JX=M$R' );
define( 'SECURE_AUTH_KEY',   'RHCw_=~WFledx9X+N%I*v<BbN[_v[,#a{n+~F-RPPb0@i0LD%AOnoFi!hQ+xX#oR' );
define( 'LOGGED_IN_KEY',     'l=|rgQY=i>3^QLn8|eB03}X/xfIm >:psWNssifc7`m*0h|IJ-w1jOY9$mJ@fHSb' );
define( 'NONCE_KEY',         'Q~h;8u`]M+6,2{V/WE;0:r$@36{vsqvu7M:I@]%8{Fo~W+?rE-GYTnWBp.&rGnD-' );
define( 'AUTH_SALT',         'vB}7j}W_@Cn#6IB7Wh<*]_O 2Vgw=zJh!^Bm_S}M--b&+i_c5a^:mp]).IY]nP!Y' );
define( 'SECURE_AUTH_SALT',  'f]XOfp>X7v)!oC,>pbB:l?{-OS8oj:UhF_,zF4F {Od!Eur&aejz`n@C(yZ$n!lT' );
define( 'LOGGED_IN_SALT',    'KUtHVH6hcSKeu?s~*<=ckg*%T/=K$nvJ8c$G^*mJ+m|cew=zsOap.!>MB$=iK=sL' );
define( 'NONCE_SALT',        '6xO-#n;Z)c-3XV_Aph%XMz[]3;UwHy(JpC;i`GJr+[ZI9Gn?;Cv}WVw%o=J>j vV' );
define( 'WP_CACHE_KEY_SALT', 'hw]2^1UejCk@|?W?r]JjTr-R Eu,s.vw5%anB6C7HIeC$)M.HJkMcxm5R[LspU;{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
