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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'yP3aTfi|<kIg~n0SK}(&`B[_2eSi)t,XK#HQe(_nA<kk]_rnr|B.T,8Q`_2MIjD.' );
define( 'SECURE_AUTH_KEY',   '(kP1:Y^I[<P7EHrT^ynhb7{g4%Pdr`=iV1QfllRD)f}bxlLQW;|vG}D-Qrni>csh' );
define( 'LOGGED_IN_KEY',     'u)A^F/L #!XM>c{Ue&fB1x~*iHW9vms[45QNG{drUcZ3*vi-1r@(Ox0S=mXbLw{5' );
define( 'NONCE_KEY',         '`rJX%TsO*Z5E~K;V2UQ;)ADtwsUa,bB<|2]m0ECic|oo^qFZ#Z6z<8S?3:EEA,cY' );
define( 'AUTH_SALT',         '=ispnE4gKe(fP#Y|t@7eSoy1_F8$gNH|#HGvCU>+W&ka+jp!,9pc9E{%4~w5$wO@' );
define( 'SECURE_AUTH_SALT',  'OG1k/Qr/|`B7qq;AzLg+^S#cQ?kb?yx!tq7PfiwV2$q)d&;/dB(6b+GnT8sKj]q`' );
define( 'LOGGED_IN_SALT',    'qW %~G^h~!r6VyJ(uZPYP=pE~# _^;q32z9Xh!Ck >B~{&Bi)<}!E4wj6V3>1+&{' );
define( 'NONCE_SALT',        '=IeEdJWeOHq&i%F}_8SJm8N71,0P>_*ryw`2%z)}wYYqrk&Ao_,O#QqDbNb~+K|S' );
define( 'WP_CACHE_KEY_SALT', 'wn;-e_Ukwu{=hMe%gBp2HeG4Jk}XR]v)mUS,7RJT<fNWIVcRV&iI}bJZkz)yK.|=' );


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
	define( 'WP_DEBUG', true );
}

definE('WP_DISABLE_FATAL_ERROR_HANDLER', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
