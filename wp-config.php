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
define( 'DB_NAME', 'basededatos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A~U%?GNn>(Lv]N_o(Zm%]%jhe0sUcF+eJ7[{Ny@%Qbx^|H_Nql,yQ=+&):_D%-~x' );
define( 'SECURE_AUTH_KEY',  'c.Mj5=9eVFK!D{fj9$r_E=6!>W<PR%K5f2@shO>r}TC&{a.akmIQt:HWzN1v2pS{' );
define( 'LOGGED_IN_KEY',    '9>B9W=S?4dKW{&n3>.Sa>nz*<vnvqNLpriN;l<EdK}6nt:Q0eA8EJ%ArGs95i 3)' );
define( 'NONCE_KEY',        'RRVA?EVBU4Y/2- ,-OKu3KwlzxAzy,~iPAn/O#S8[H<^W}9{l~z e)rv3ULKk`ES' );
define( 'AUTH_SALT',        't1|/tlF;X9vgrXV=4i]N{FsmE+x.ACU6s{URo:A^lqurISHjYeULzW/^;QA@=HN_' );
define( 'SECURE_AUTH_SALT', '<yO.xV;:qB4xxJ@PVe84pf2of-K9%ZnJZJjYQ,a5,l zJDI,sMHQ-*G(Sig_EufJ' );
define( 'LOGGED_IN_SALT',   '}{#EIk]Kb#{,B*Ws6@ McQM;g32;t!oiaIqf+ell91oS UK9^eg7A{{imUHi9aBQ' );
define( 'NONCE_SALT',       '[bMeK,w+~%d!?3g/EH/bG%gnO7,5@Ogr2~.7UOs~h[>.@1>q~q@+]ITUM1:8D?do' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
