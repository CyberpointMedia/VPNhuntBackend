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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vpnhunt_15112023' );

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

/** Post Revisions **/
define( 'WP_POST_REVISIONS', 3 );

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'IMAGE_EDIT_OVERWRITE', true );
/** NOBLOGREDIRECT can be used to redirect the browser if the visitor tries to access a nonexistent subdomain or a subfolder.**/
//define( 'NOBLOGREDIRECT', 'http://example.com' );

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
define( 'AUTH_KEY',         'RV[Rv/0_Avi=+(!t$0cF0$z4bI$]4-YC(|J)aLt0ajs/3x[a?7}_MA<9?cQpzkcm' );
define( 'SECURE_AUTH_KEY',  'wBRX8.rrscNylB.(dusRnS;(R0PhYMO(KkJ8)x<nKj2E1/a!#n_JTV+%=-2eb`Zo' );
define( 'LOGGED_IN_KEY',    '!#|i5;{9rj{{#R8Z+9P~M:B@U1&W|AcXsoRnrleM82+;d`9@Kc~1p-laE_q#3}t+' );
define( 'NONCE_KEY',        'x.2g}y0T3[-R`2mEFID|z6`t>fA=BnFTy>4Zu)Y7-:}u+2u|8mjLSm4~BQ0so }r' );
define( 'AUTH_SALT',        'OpHDTO65P~{i/rr1!20 lm:haX4r{!EME~a]%PSpOX{K-[WW:dOS]!*7&Zl)yb/6' );
define( 'SECURE_AUTH_SALT', 'O_k[hrP,YrxI$p-yGx1Brg3tR!^DxnY$E?D:!$;(u^p,:h9BxD:a3h.R~(pv?b)#' );
define( 'LOGGED_IN_SALT',   'ipfPBQH}o6L2Z!($jKi(<dyGy0uwv8^JO|hCcdZc66n>_wX797`]5JSNRk41s*,~' );
define( 'NONCE_SALT',       ']75({,j@R@EuT>8rZT^1-I-6>fLE1~/2P:^u1/VLVorW;.O9X~i9^bm.v-Srm+QH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vwppn_';


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
