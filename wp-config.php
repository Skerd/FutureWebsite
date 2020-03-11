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
define( 'DB_NAME', 'futurewebsite' );

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
define( 'AUTH_KEY',         'X$iaH4/ez4Tx9<Z48$wu3JAq,CZ]Q$:q%=AZ`[y/[ImYYVEN{~<+~.>>gpW#z+@y' );
define( 'SECURE_AUTH_KEY',  'm@6M`]RdPD*%5C &>8LHyvTD>]g7T%vlH`H<4M+Z{PZmr]P? !:gQ6rN,ICg;v/?' );
define( 'LOGGED_IN_KEY',    '3IE}/ 3m*A-xA>D|7A9?B?h6`FiZhm+M@+wkNx7md70YW;?*#{ji-P+{(=qDDHip' );
define( 'NONCE_KEY',        '+XHQ*=D1v]kFl=$<r_b2Z{Pv_`%csirHP%#~_qe:Ev=}Ilv8-SO)5VoF;LNyp@Va' );
define( 'AUTH_SALT',        'O$`9t0_>nU&*.(>bC5]>|?jK4$rHYzvvTSu] .dL-6Qd};ZH*XkVvGNykA(8xCO/' );
define( 'SECURE_AUTH_SALT', '{2F4;j)jptGOE.puAJEhx0r9Uv@Vmi)+/YTqPoNo({n|g;Kz,[t$0A:/^ty0nX|d' );
define( 'LOGGED_IN_SALT',   'M0AYR4Sjax(I#Zdk`T~~u3KF<ty=WN>(>_NEb*xE<OzT$NH4><[ep_lrIl3ySc(h' );
define( 'NONCE_SALT',       '{p4&[a{!~AGpyJh*;n#<cr`dIG=IlmLr3(GAxQ8Vx3Z~h9%AVX82%^=yhsgxWI-Y' );

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
