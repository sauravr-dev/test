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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'xYP47J!esyhNpI/aA i$(RnXH,uE<7)ffF,?iMmSxN`9d~}!VK</X/}O_{FVh)5E' );
define( 'SECURE_AUTH_KEY',  '@UaCCuc$h6-X#fgH53o*<}=(o2m;N.[[/VGE$n%EVHXvRZ{3 UJqPG+5%|u,AoKp' );
define( 'LOGGED_IN_KEY',    'L;p+EUX@aq6US5]C6c3xEy+|]C)eGnu?ITwgkn^*v~u%Ij%`v=cVzAAHn46;GqZ`' );
define( 'NONCE_KEY',        'bB]0I,g^XCqurL3e=/e7$>_@jJKl,q-ca}TqXaY0F`*jMdd#OBqMRU7aTSp*RNEI' );
define( 'AUTH_SALT',        'u3!!A(XIDqX7%0&?E*>U(1VWhjA:(Epog8D^Ll$RQr(r,y2SGKrxwGmtj3_|!7dC' );
define( 'SECURE_AUTH_SALT', 'WBA7+&;I<7V$RHt1ZvL+?}[nW?6FhFU`<8g+t;=s=liVO^rP6!T<`;t1q]s4(=Bw' );
define( 'LOGGED_IN_SALT',   'AOnS<Oqb*ZW(D#n*d2S?@d`YCgqqs RaDjyH2pWv$7KyJR4q]|o!G3fWd9X_V^#C' );
define( 'NONCE_SALT',       '%P^;d:D~0 zITT3q/k^E?&Z2G/XEFz.,j_=p:hw;G^@duBY<b*%-KPGY&49xYd0q' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
