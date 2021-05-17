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
define( 'DB_NAME', 'yvurrekwordpress' );

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
define( 'AUTH_KEY',         '/?f w/,eB(tgkH;`(Fge@@T54#t-)~BZN85JBn-<F!0q!x$(5=?O~YC-}uj6WP c' );
define( 'SECURE_AUTH_KEY',  'Hbp6U%_@.]( fRtS>+v^$iK6yz#4Q$o~Kn?9&l.VktCs-71Ae0=~`|NjOzF O!(q' );
define( 'LOGGED_IN_KEY',    '-L(_Fr,HUw93FYkO#w]L$`T*ViRTI0vo$_wNv;9J]SPqo%8S#^58|0P:<x7qB,AN' );
define( 'NONCE_KEY',        'C{B.==]Q]n8(],xTM@#rW8G~SS{ZH>Zu|A^soy$Y^1Y^(K8%d$^Jb=lzr,n6l g(' );
define( 'AUTH_SALT',        'ZFVJ59TLxQ)xTyvf3}d?fBM}:9D^4GAp#*AW95K+ )/}&v92y([gvWYw2)4Bb| *' );
define( 'SECURE_AUTH_SALT', 'y3QontcZ^LhfV0 8s#nb!PQ|t6gT*!- DD;nJZHC-JL7D&A#}]|<1&C)pnw@Z,21' );
define( 'LOGGED_IN_SALT',   'T>Uy?S7;c,IXuCryI0r~>4-Q(<%_oSBly=]`g5Z-Gq;0_WL<p8hqm<gYrve_`,o|' );
define( 'NONCE_SALT',       '+WJxZ)**qw(6p]wmxE/Jca-qKF-hCeE8ELkUVg__fCYq1)EOktzsW(h;$&$=aYvl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
