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
define( 'DB_NAME', 'citymody_izmirproperty' );

/** Database username */
define( 'DB_USER', 'citymody_izmirproperty' );

/** Database password */
define( 'DB_PASSWORD', 'zb3Fd-~74R' );

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
define( 'AUTH_KEY',         '1l`582F/#jE^cdd<0@_q5_{M*gx:shnlDSZ*?|pgVc0Kq;X!%84zTDomR-si1QuO' );
define( 'SECURE_AUTH_KEY',  '.5$F1;AdR{{[f7>4W-f7HZUzfq[w0ARL,su|l~cs=bygw|ar/{@nn`ibE`&(F, v' );
define( 'LOGGED_IN_KEY',    'lZ hM>ACZ*9#U,)XuUM9^$SjyX-oI`D!0.$HlnMZ<+qE4nxHwlnra%Y+~z!Z9[D}' );
define( 'NONCE_KEY',        'hjMC(ypITcDQQi^@}-#%z0EZ}oU7)}qbFUz]q4^:OOj[1db2Fm4H4L3J;l](-qjR' );
define( 'AUTH_SALT',        '6k$ub/1tTv:.TrQyoqX^jE$)tr?<l}v@8A[#?? qQck~h6P$<sZ[Rz>Bw05|V_,8' );
define( 'SECURE_AUTH_SALT', 'r!v94gQ/%SPJRM<c5[I]u,b#>1Ny@[geIFvz4=t(KOI@{hpUoII2Mvx[8!.qR@?{' );
define( 'LOGGED_IN_SALT',   ';t&E?pE)mVoO!r3oC4E6-@(|dh5lFjL}%B/.E1:T_uVHbP]t%&g+z9Z&)N*P*&_,' );
define( 'NONCE_SALT',       'EWJ}X(n.~PSltN+5qsEax(X|ce*5:$xMle`tn-6{w=J|_1^+)7:m4nVI?trq T^y' );

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
