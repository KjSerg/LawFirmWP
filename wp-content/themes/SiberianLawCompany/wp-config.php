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
define( 'DB_NAME', 'nazarkubatyy' );

/** MySQL database username */
define( 'DB_USER', 'nazarkubatyy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UqPRxMGnPa6hV9D1' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.zzz.com.ua' );

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
define( 'AUTH_KEY',         'x2} Ns wgF<*!,Te-D1:p+o%VQfNnJQQoQ?#J40YZ pQ;ITVL:ViwQ79kQ+3F@&p' );
define( 'SECURE_AUTH_KEY',  ' -0^bb,KfK56u7SgG5u81<%j%mo1Xx^`6w*}#qc*?PN0Bb.s(FO>3aNQ)mKUc!MV' );
define( 'LOGGED_IN_KEY',    'mKYQfi:VyKFIx.!muQVzA(Og*23hA<E^iD>hREp](?uP;lJ`Ji?Dss-}F3)z36$j' );
define( 'NONCE_KEY',        '54!nKPu3oQEwI2@``| P.W>e])//{l>3F;$&Ssvy +__d}:6<G9f:>[,reW~s/Zh' );
define( 'AUTH_SALT',        '9n67I(|w//>{DnLDq;z4LE}zX$KI^5}wL%@RoH9OR( ePIXFX=~im77qjHCg]Jjj' );
define( 'SECURE_AUTH_SALT', '@1CGj>QzTe7I$m;KWnE,8d@mwv_99%w_TUKx<APKsrce&s4{C~5KuNm~(c~2R<~w' );
define( 'LOGGED_IN_SALT',   '~f6T~3d!{oe.{Tapo)!&1Z6X?aM4hLTh>sMf =-]d|HQfwb_~5^iZjOw!/3jF!%;' );
define( 'NONCE_SALT',       ',r)L7@+g{D*Hr5A:d6A_]eNj4-PEs8#8SJmFA*:X}qHm66*YwZq1CmP!fcf6o^df' );

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

define('WP_MEMORY_LIMIT', '128M');