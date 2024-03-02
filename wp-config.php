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
define( 'AUTH_KEY',          '<nBK@2f#8Xw}|=HIJzu)ta`FXD-%j6s0+#OH^?dg%iY)#6^War]T[IWJ:,;$+|s>' );
define( 'SECURE_AUTH_KEY',   '8j:kQX5$*ehABwsDTT1+a=fh0`Vm!VZhu_c>CA0PK,X(0d[fXudJlJj`zvqD:foF' );
define( 'LOGGED_IN_KEY',     '`vl#jH2|p{`1Roy}T3.,P[t;tD7pA+PhT>%>l#rwR&O+gfT:]pj+Oj~ApXCQ.j#9' );
define( 'NONCE_KEY',         '$IfYdt-[^pPzDL(sdu_0-X}W:^hrq/G)Ejo4!~P)]rT*091.d8+Qvu393n#9%@vq' );
define( 'AUTH_SALT',         'qag|34=UM7$=[AyVq#A@1 $/D6NooL.KrV2n!|I/~#3+HjQIk|CmU,2tUb@(:7_7' );
define( 'SECURE_AUTH_SALT',  'Szi|}`1yS9fI35<AT4k?,(z0G4?{@`2[Q.Nc_fOfRM|V%3t1l{%GQ!$%Fi[<kVdY' );
define( 'LOGGED_IN_SALT',    'e3_aqP!-qM%l*fmVP%1/IQdGr|m(m->ApEArT8S$Op?j+2KAWwJ|DxA#`RY!D0qo' );
define( 'NONCE_SALT',        'fa/jqQCC0Oia`f4;xjy)nKA YITODXD@BbY,G]h^Q-Ery,Owl]r{j,K~pB&e4`qK' );
define( 'WP_CACHE_KEY_SALT', 'Ex-1_)ZjeTizwQwJay,=i%hOU<~},NVeTu=K4t9W@ZOy.Lc=Jz93*4TtQt%.yr^k' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
