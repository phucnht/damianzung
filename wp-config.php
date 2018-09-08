<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'damianzung_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_c/7hC!/IJj[9(@h2/Su.2 i(h{y^@st9?{@ZM|:V;OLAH7td5d(Tf(zOe%+9j<u');
define('SECURE_AUTH_KEY',  '.Q^<(#~}7!muvRg-,Vpc*94tTK5*aW9:TPJ1j}Li+{I>m63sF5DR.a*^0vgV<AH&');
define('LOGGED_IN_KEY',    'R9g-@ule<ED4#15I$7 7ul[-g]U$}nENfX-9T=z+d2p%,7Pou?[_a$83`G:$MoS*');
define('NONCE_KEY',        'Y]0ltm.9h :q0BKYe gtcCM?#sm]/d0X=A(0Wmc%oqFkd,E~8W0hb-JhsB//{DVc');
define('AUTH_SALT',        'E>y~PeINVeKY,VDJ!r5w2K5rrI =W,Ng}6{Lxj,qM-}@L~d-7k}<f949rkq5c3nE');
define('SECURE_AUTH_SALT', '0{-*]B{fe0CF$!Q8E<)9L<DxunG={f:mTYN i_Q0zuF16uY&v>$d/<KD6IC=e!@]');
define('LOGGED_IN_SALT',   'Z7n:e@FaIaRbA~(se!6O3g&DMN]:y:inj)3D6rm);,=G C4$vLYN8r+pR,VOIdu1');
define('NONCE_SALT',       '@br> {VO ee)S0zM@JxX%vU4<#<CAN##1Bfg7,(S!e6~>m-C&A)0J#BUo(P44z6?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

define('VP_ENVIRONMENT', 'dev');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
