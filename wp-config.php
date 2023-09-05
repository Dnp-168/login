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
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*W7J.ADe%);Dx:(}aBJp:+V9Kaz&e;8=,*(=nsAX~TTg;+Ae}1rridBUU+)zHqFM' );
define( 'SECURE_AUTH_KEY',  '!v^ ?ww6}};~~/q(v5_ETjnZp0wvy$u#/y/rzzhDR}EcglttWRzSPXvYEy#N10Tx' );
define( 'LOGGED_IN_KEY',    ';_Z{-)*V94?zR_N<,oH*vIfaPq5;pj@/A~&),N%IoV<&:_`-#(YZ-rtnhW%8-),c' );
define( 'NONCE_KEY',        'Xd ++tw`4&@B|wSmA}Ivekj$t+_&xnuF.Ih+I&,kKizD&H*zicl:dmM)k9xD:$SV' );
define( 'AUTH_SALT',        '^#X=S?v.kMm9LMr1rr.K/[^n%%KNE{jE>ZC`b+!Td-MnB~k@bKgtAdNX<HNh>=Xg' );
define( 'SECURE_AUTH_SALT', '<LPL&n0E2e/({Gpn-9Eh|/<x{Da)jrc|Q<?k^uHwt~)?&PY[sY/cOWT-.K2$NO12' );
define( 'LOGGED_IN_SALT',   '<{)i(]={[XLciK@$00A}r:;y2q,xeq1y_hg3q;+7Kx:Of]k=RT89YPM8q6tfw]J/' );
define( 'NONCE_SALT',       'Lu)=dN#8n^n: [#.PmyD.Tx`c,ETfUrzyl[O[zCS_k0)H:n-9Cz&H,9;9SfcxvXU' );

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
