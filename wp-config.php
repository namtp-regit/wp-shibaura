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
define( 'DB_NAME', 'shibaura' );

/** Database username */
define( 'DB_USER', 'shibaura_user' );

/** Database password */
define( 'DB_PASSWORD', 'Shibaura@2024' );

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
define('AUTH_KEY',         'n(UYj~{(fB7+4L1^ifZgu9_I?3{#;<x{g$BZ^&0@+Dhe%Rn}+gbA@D8%]uh=S`QW');
define('SECURE_AUTH_KEY',  'F+}<]1u.{(hGrg)d(_[tIC6E)??QOfld,vt+^jhX:a(vD~,`-#y<]xL80-&_rE7i');
define('LOGGED_IN_KEY',    '.VRuF?Z%ad75Xjf^:1M{|6-?Uy|;SN5f0-!:.p>blcfnX+9LpNiJqh(NC])H)Qc-');
define('NONCE_KEY',        '@@Xrfm$l)2!J[vW2/#v~CBq]LeRYrG[.`agK-aDv!-L7MxRi{}|dL2{T33-De{;@');
define('AUTH_SALT',        '`N0* +VhlA~LKJ<OwU]BE)Bxm6UNKp,}j0ll{Jp),ed:cwsU1LF]4 ;zrB36i7sW');
define('SECURE_AUTH_SALT', ';)~[9C3Ab)h.r&J-OUZYxaqr9>|bE(N+I;1N=]^(D0+|f+;8E%d=Q9vmV:XnLQ%n');
define('LOGGED_IN_SALT',   '?r[b[1EFOE[_Ch-`6z7|_;MUCcKs~g v;QDW]PTOq`pZpMHo6KD5;MR~#~7U=tdg');
define('NONCE_SALT',       's_q+:Jc|Lx#yJ.ck1nOyf%)q{&b~/Nrf?TF38XY,#uKPHiwR&PF0o1+wEe[<.hH$');
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
