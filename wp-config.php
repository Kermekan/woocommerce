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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
 
 /** Sets WordPress memory limit */
define('WP_MEMORY_LIMIT', '512M');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'othellod_woocommerce' );

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
define( 'AUTH_KEY',         't?agX{96tdgVP6Z#lOEU^ Hfvx+c~&9nT62#BiCoQ3EX&JS@vPMBW3{CumDynuYu' );
define( 'SECURE_AUTH_KEY',  'Yh^+C?JV=gK?(4]#xW3{?^ u,.f<|esuPXU^Mhe/Q(`D??T*>IRdzvDkBa8:T,rQ' );
define( 'LOGGED_IN_KEY',    '}$Y3KD8v0!Ph)Cp~];{smsypTW]F:cK;HO.Kkd3 #jee{qj!_uIKf;Xs<Nymgdf;' );
define( 'NONCE_KEY',        'G~pIkV B-!+v-tmH3eUJ|bDST$V)rGJ;>QB.~T<&>$`13V0KC-^_`S%q>f)ihan[' );
define( 'AUTH_SALT',        '5@yn[2xvAXFkRsMt{+1<?Yyf<}ww3SB-`|GP5=O^*:<i-FMy,a)|x*8F<uRn$xy,' );
define( 'SECURE_AUTH_SALT', 'E%uGGa+(Uc5?HqZEfP43200nc+e)sak}FLo;`/z=PP)v#9OkS+O6T<B;=>:=p}*0' );
define( 'LOGGED_IN_SALT',   ')~@8aOWOc`E.Ud0f0N0{O;N]}T]>}3Q.Tr8$S!8xgQ([{4J*K#Zh4%&*qmUs$ov.' );
define( 'NONCE_SALT',       '(0p=eukD-S4Uns0CSOnNOWMg0#dpUJyFcf_jjg>ls(qgZ<BfjqB/~t`p<O;s{L^t' );

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
