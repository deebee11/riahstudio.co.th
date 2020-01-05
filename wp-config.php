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
define( 'DB_NAME', 'riahstudio.co.th_db' );

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
define( 'AUTH_KEY',         '658jBHELM85s`RyJ~-8#7Ev=ohIqEMw1W3GYg5e?BfmAx8ZVC63)T1Bp3].oAQ5j' );
define( 'SECURE_AUTH_KEY',  ',VF5zmvP+AIsJfB,:j{@077QA[>1F:5/s}/[)p&tqJ6>IzXI_iKY+y(oY}(3+}fV' );
define( 'LOGGED_IN_KEY',    'PVuN?!Y3&--@d7Mvqqc`$FPL+r,q5Tl#HV[K]cuFKE!xiv>8^v3w3}M/rrZu9O B' );
define( 'NONCE_KEY',        '-5%/ f}djc,5Vx~Vh+vvh5,J|T`)])aC5L7|0~m?=HL)8H_#`YBU5gH#T$|hz#W0' );
define( 'AUTH_SALT',        '!j?S^Y)yAh~zqrT7)6[*E{[9?SZ~lwA(&bikppd0tR0<MG{,kA)#{zv!ziFvX8_g' );
define( 'SECURE_AUTH_SALT', 'g<=Gyd8[AYJR.4!*lhEJMF%0v|H]1GQV[/(W}8toI=mKJuVdvj]@gtt3NN>-M1@a' );
define( 'LOGGED_IN_SALT',   'O3llgwg 806!>#W?X1xX)gImm>h&DR&8vtKs_ETLkP1i#$|;WzL}POQ*GGJ}*IPF' );
define( 'NONCE_SALT',       '/zm!^7kn T<:}kp~IUYn~@q^Z!JSeVJF{hW<fuF)dyx0yb}@s-G[0%BM$5MNWE! ' );

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
