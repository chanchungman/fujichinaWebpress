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
define( 'DB_NAME', 'fujichina' );

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
define( 'AUTH_KEY',         'F)j|f]R[{VoIT@6>^a}wV,7%y@O-9t-=Op(;pna+aHbYU #D80S!#^V)Uz:r*sK)' );
define( 'SECURE_AUTH_KEY',  '#7e`jFveIhX=I_v:MUzV.2pB!%it9GBU1|V*>nKnSW{kS6T:;}ksam0+0^8AX*-!' );
define( 'LOGGED_IN_KEY',    'rdw0s5l<OmRo8P#g#)86J<}qhi/K[Ss@f:/tgLy2~G+ZA&!~8C}] ,/evf*IKMiZ' );
define( 'NONCE_KEY',        '.@E <K7,*apRyB!Fk3y2+^NB^D@I$etOk5<ItxMC`cidmg@*U-%4%++br{`f)z6|' );
define( 'AUTH_SALT',        'j^Cis^zvjS|%{zOnQhOfgh38TaO!1Vsfn|[Lw2@oZ71h(W|y7Dog|E@b&M0{OcsK' );
define( 'SECURE_AUTH_SALT', ']KE+E*-PI:)ApiE &~1l13R=vE&u6(J87]ELZDV ZUOC,A)d/XHWeN:2nb>)bM-X' );
define( 'LOGGED_IN_SALT',   'Hv]jq)]5=&!-a_+TpjCx3Zx,KdmJ@wI=e3V-77jRswn2PzhEw%]ZPUL,T[}}YlOw' );
define( 'NONCE_SALT',       '/8Q$ (<8$LbCRoybnp8n=k25MQ~4>hEx12W4<tFPz2tm?jS35hC5c.A/B4(VGtu+' );

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
