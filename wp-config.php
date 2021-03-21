<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'AUTH_KEY',         '>bwU>7W;)M~KHM|j5S-qGSp&vuO!-+gs&TAndDlZ4_|c!&.j6B;&cwICt&)1~yUK' );
define( 'SECURE_AUTH_KEY',  'Il0yfyxFA{ZmUcwqfnP~6Nv2V+<R|u96:l]=.`yaE00c?GL=q[j$O%iU2-&B<,gb' );
define( 'LOGGED_IN_KEY',    'T.XP]g)[m_[D%^f8& iM1Dd8hY5./_%m=ny#G[-Ch`<)|Ao{/ M:ENM,+-R@z46!' );
define( 'NONCE_KEY',        '!5Y]sM-H.+~ECD9,`$BcS34a7Z_q7|Q8XB+5n-L]<>SGnlR`KQTM4ZstZU!H@4_D' );
define( 'AUTH_SALT',        '6e ,dX=-1(C!^cnB`Wv];^#7=}x2[K}Xrf*5_O><8sQEO@< [^sz*PLT|~-Gx6N5' );
define( 'SECURE_AUTH_SALT', 'bV7-T.uqTtFrse}~x>4w*Fps}#+i2 I3MN7s^[,ZX{M1<[G$Xma29kNxy>R]<RW}' );
define( 'LOGGED_IN_SALT',   '5$eSU}kW=W9LGf?j6*Q.9z?)iS&gSOZ,&%=:O -*o}xdmn9wKWegKIavty DkvU0' );
define( 'NONCE_SALT',       'U]yh1<V_2p,|*8mv}mT?&rad+W02a^hD[l2#&<?airj1v~$,pUiP6*f)hj]&Ut.D' );

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
