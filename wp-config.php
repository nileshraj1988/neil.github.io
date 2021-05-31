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
define( 'DB_NAME', 'builder' );

/** MySQL database username */
define( 'DB_USER', 'builder' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bleedingEdgebuilder' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_HOME', 'http://localhost/site' );
define( 'WP_SITEURL', 'http://localhost/site' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>yn-s8_Vx7mD#C$GO1ys-G2nu@d/n9#=eu5M5P5~0V6UVO[6x}%8<5t4S|N/Wg?{' );
define( 'SECURE_AUTH_KEY',  'E7~P0 fq,o_qwq9#UUh{fJOrO)!$_(:V3 )[|L A<sHW|>yt{!S)o4O=bsAihcJ!' );
define( 'LOGGED_IN_KEY',    '!$&^4~EY=E0/<7oS#]kY{=D<dK-l=&1@@^D*{F^95E3RtNzS#xf7Fj;8Ln-n? c#' );
define( 'NONCE_KEY',        'C0roOQj!+cfaXC[jTblRJHU<(9z+<#%C^Hv|_kb@hu_ar+Q51eGTWgkIic4$z3&e' );
define( 'AUTH_SALT',        'sEX=q32L6SO1aSw_?Ga0?N;OB?doMl/#q!-pG_-)kZUM!ru$UkR#R0wD ^K5-y!]' );
define( 'SECURE_AUTH_SALT', '%Kvq|sD)DfF4XXzH7A6X5uwJ>]w+3^2=[?*X(jnb8BWduD_k/wdQqwdJ^D^U[QG|' );
define( 'LOGGED_IN_SALT',   'c3+P:hsO/Ab1BO[pWs>nsZmrb9g]{E/6I4,+L|@W9$-`<[]-Gk~tFHq,DPUj_.hf' );
define( 'NONCE_SALT',       '(<mZXb2Y|Qsw,@@S2$g,{+_3k[!|wTQfCG`Uc]g{Xl|Z=cjYGz3mv!O]G?TmL%3&' );

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
