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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '?O^A;xHa^ijot1f&qMPo4I;!0w%VR 5|879(flo8n3.@^?vuW0pE%a+bu8FpT6n`' );
define( 'SECURE_AUTH_KEY',  'Hm[7.rP/,Yprf,=|,mbimf*4M]s%c1XFZywW|16IBqz}4^9aK72{f%*pSkIqTFF3' );
define( 'LOGGED_IN_KEY',    'c=gDcKKGp4d}ZfNXz<6*d#zSkeIy,n[Sg/8YZU,w1*/pM=tG/2opAY7F]xjjAQ/T' );
define( 'NONCE_KEY',        '%.>f0MmytLE5jw&!mbf%7_}<*rPWFt2<>nt&K:@y[];}E[cf}m1}?*M5|Ii2<d0+' );
define( 'AUTH_SALT',        'ai~o`zr&y^M(o>*5=o.(w=/_Rxp2|lbRjj%~1b^<23`3dV.P:z&` HSD|lZO{Im]' );
define( 'SECURE_AUTH_SALT', '$yVyp />v1D,xvXkt8*a&A3Owh-vf;P#1ic7#U%%,Z)K>A[I>28Xj%,MAX>a;>td' );
define( 'LOGGED_IN_SALT',   '>}>G[d;sByoAwS*:o:/.Bbm[mk(k),SC67D:o;TN,>FT)<E:^3V!ZD94g{23:-9X' );
define( 'NONCE_SALT',       '5I{+ #Gvexg]+Q/y:v.]wcAsTJ@}9|C?3esW1dJ@k?X:i~Szx%%cPHDTK{s/sf^p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Ecom_';

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
