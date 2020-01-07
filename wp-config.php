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
define( 'DB_NAME', 'nasa' );

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
define( 'AUTH_KEY',         'S%QuzKvc^OyPcI?qttjY?Rk<7h=wFh[MbF;nc2wcnr=iM+)<feu{b`ck_O7M>#3G' );
define( 'SECURE_AUTH_KEY',  '7KYbkug:lO[r049O:{8p]DnR7@G7)+),tE@*xZ<4iOt#Mv^vwJC!G,K11|%-.y30' );
define( 'LOGGED_IN_KEY',    'i9^eh@mPoz(1r7lqD[IkG+h 2XUj3^aR9q[ow;M(a(:%n%*W+I7Nq]H>YR-.JeCJ' );
define( 'NONCE_KEY',        'pU}7_IA.)];L~0f5Z=pPiNnW|E!;y:@YE!E7_!Z:/1bK0{Nza|%[D8nfL)()o5,*' );
define( 'AUTH_SALT',        '{q<Kl#6x13Uqw](~,7,t.]5p+ 5JQ]<]jSN0;hnb?`$Ql;pU=z@^Grb$nF<g$i@$' );
define( 'SECURE_AUTH_SALT', 'vap?oe;In&^*<Y>w4r48_$+^@@oExy(H<D~lO*Htxdes?avht}(t*R|tp*P_*(qU' );
define( 'LOGGED_IN_SALT',   'gjemZ3lY%6 /}AJpY4@qfz$TK<se.Q;m+iFOLZypuJ!|$4Mv47An)B-fV.)kiw+a' );
define( 'NONCE_SALT',       'V`D{r+c}[f=q{%=%>+Z&&;;!U=X3opz:5@uXjl4&RaB{9vMXBae>>Od0jt2YZc!I' );

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
