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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         't[LLqB&nbvR+<!`z:? }7`!]SW,hD#m;R?w W5+Zg!M6#SAJGJqSr2>3?7M?1X#<' );
define( 'SECURE_AUTH_KEY',  'kpj=j=q~0~5&c9iK6~JJ;Yg@@d<(jFKyJ~Vx,^@>t{J%; A=|]Bu2=(zFJH*1PX6' );
define( 'LOGGED_IN_KEY',    'u@[D`FxT>iRDiLI> 4nf{-B@-fll]PNvbNg[$LG2i~lsJj,%nD{FGs5z/vm!ACsL' );
define( 'NONCE_KEY',        'Z.u>2=QeG8<0#,5W[d<Q-D/~q`MH+Cqc,@oD0y9u.<uV GC;7~>P&0N!o_)Ben2%' );
define( 'AUTH_SALT',        '}#C46<ImlcJOLUR!yzYw}y`kq|=xu@McfFMCbNu9 7nQcMNxF1R!aAE2Skn&qn6W' );
define( 'SECURE_AUTH_SALT', '<P!=bQ?y{,bXsm<C##nsB=U,YQD+N*_r8g#d7l2[->)[(>+T0*_u7L;U[`*/*S(`' );
define( 'LOGGED_IN_SALT',   '+mB[TTz+Kco?JXb!4RFh%@%g_{VNYDg#0]Le#nQnrCfQZ6O_sS!7B-T|bxmSdW{r' );
define( 'NONCE_SALT',       '<Nu&rWC.,&twAGx.@<  VxRJ7:sZK3wIycCGO7K65o7 OdD=vYNM.vJZv8317eWu' );

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
