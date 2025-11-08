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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_act3' );

/** Database username */
define( 'DB_USER', 'Jayni_03' );

/** Database password */
define( 'DB_PASSWORD', 'jenn3_jenny_0506_3' );

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
define( 'AUTH_KEY',         'WYjA{l~J3$nAg6R?Dxuea5F]Q8llbGR>gOBYjs#t<jEw ~2s]`iaOG/+<A{cM^1!' );
define( 'SECURE_AUTH_KEY',  'd5eI+Yss#s5n[p;7 G5KPv%u:G?8FDnuca}>{V9j$!%%bhR]`/Zj~tk$WV^,q,U(' );
define( 'LOGGED_IN_KEY',    'No}0|R&o`9C8-m)N7z[cenk-QKP8&|A]u hzL_$aUF~0pS5{ZL7J]6Q4A+#~+eX8' );
define( 'NONCE_KEY',        'KkH_K>kSI3#H&S_rW[LiqY3JO^$s1m<gH4}J+aCmqUVz3v_/dIAU4]?M<NZ~*W3$' );
define( 'AUTH_SALT',        'p,z=G/7y=W~sTt/tuL,goqX%$aF8S@qD,maJe??& ]WH#,t<yOlwtHRbmM4pBpQL' );
define( 'SECURE_AUTH_SALT', '^,Dmeis: kP<2DM4ZSoPxL+L.#$ Wwi1TwU%_t&*(LIl<$3AU%0w%&UZx^@2L`n1' );
define( 'LOGGED_IN_SALT',   '`U~KdBcKnQKo7ls /2G=WZ6Lw8`yl{v&`z{_.kEdcYKr5U,$;9bzK,(s[q~%sJ{$' );
define( 'NONCE_SALT',       '}X_#(#O]?YiWD&-Kam|{x+Np#S@1>H9PSa1S.5WJ-6Qql;RLct^B&fe`<]rYiWzd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
