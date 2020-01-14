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
define( 'DB_NAME', 'supadu2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G}1 =<*LA|UcAB!GK `D)V*8N9W 0d`o7WGZ7{@sc[gnb!`XD)(u+GQ.RE;Gm&wj' );
define( 'SECURE_AUTH_KEY',  ',efRcLT6~h-!{^<VfNc+@ENK[7R!}sT889S$ O#4X]#]Q/d>56KyWr5isvS}dF$`' );
define( 'LOGGED_IN_KEY',    'Qg^0-6|CI6v/%;[mTvo)AEcZ$+)4H~a6e~h]P6uGyYfw|t<S5]5CFH;}l~JoOP4<' );
define( 'NONCE_KEY',        ';5Vs*f$kj6#=[CY#P=J8rZ,hW{:aEd:,ahj.m*,rX0#Jq +4$8EU@44?pc(Nk~&R' );
define( 'AUTH_SALT',        'dyutS:[KtcBT8}1HWpv,[iL+/F]H2rwU`+/t+OeV9Bl8_k,lu_w1J{N?Lw;~+12_' );
define( 'SECURE_AUTH_SALT', ';cK$6x^qXJLUBLhqHjrvYBAodep3X|Ko>`U8a!LQIX.Ns<+QH2jJU=I7P,Yl)Ya=' );
define( 'LOGGED_IN_SALT',   '(t=~M$y6w%h$4kmX0[[H1XlA>QTbAv=)NP:(kxnO=y<$+,n0=$A}`,B|6GgIcC4.' );
define( 'NONCE_SALT',       ',ovsl;S^ZH2E5,xKR]rhohD6*8;+o]FlMN)oDJ,8m%@yqFa]Gc@uR7%>(3eqoVDP' );

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
