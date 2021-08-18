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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PPo93CyQ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'X.Xdp{$  ZF].R<2o4;n1x_}or]<fDCt27iw} ZYHn,jHxP^r&%3Kb+e{01za.Js' );
define( 'SECURE_AUTH_KEY',   '@j^}}u:o7uD ad/<!QjMG:W3D]_^~(=-}S7VTGV%d[s+{LIs+tFU)5$R+]_~+{wg' );
define( 'LOGGED_IN_KEY',     ':jZ<p#.-M22#8+0oB%Hr)u6DhyLf6n>oW&JYTX`n!hd/,4PDYFY^=kY`emf@#=l>' );
define( 'NONCE_KEY',         'msf4@2d*Zv~vW}?z1ZLq[JCH#7v1hX47%H@Nm[h7 [b,FYXcHN-6:fF-Ai;R~U.W' );
define( 'AUTH_SALT',         'w]TO,a& 1,X;n7.z5(R6}h924czIp4IR#Ec]&!c08/C ^!e_bB~hY@?Ga)oY#$k ' );
define( 'SECURE_AUTH_SALT',  '3x5HYvi2W*cbd-Y1R6)FGdl{*<)ZDGU%04hQp^?~cF*P7,4};1@WU#NO3H*@#$6l' );
define( 'LOGGED_IN_SALT',    'pra%m;AH0/Z|fysRcf4A]Jp1FjpgxRy%r@*V`DqRcR.LWxhkc0CHj*q;$97vD]>S' );
define( 'NONCE_SALT',        '}p4[0MnLYyWkJC_rpSxt4hqI(F9lhB%MA@Gy.Ui_u7:G/8 ,e47A$R8Dd(ki<8uJ' );
define( 'WP_CACHE_KEY_SALT', '}%xCo^-?_FC2f(7`CMP?zJ&pK6djyCG-0wr~ZMsPHu9yb@_Gg&l{IH^(I$LU}/p@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
