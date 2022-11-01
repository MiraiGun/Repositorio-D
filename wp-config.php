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

// * Database settings - You can get this info from your web host * //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql_iconic' );

/** Database username */
define( 'DB_USER', 'sql_iconic' );

/** Database password */
define( 'DB_PASSWORD', 'iconic160402' );

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
define( 'AUTH_KEY',         ',6j)!`NzIks9pf&[PpmS2l! Rvhc8zXV,@+c&I?4G}IY4e[D%BE8/XR+v.C,rY5Z' );
define( 'SECURE_AUTH_KEY',  'kVJg}fTAEeX.&_&}Kt]&dKEgMAQ3gE#:n.BiJE/Qn!779O7V}DPwNJK+Tst,!~np' );
define( 'LOGGED_IN_KEY',    '{Psp09!?lw5?NIzEeV0Km]uR{yDfVbyvjaeLRI&zyX%TU1}.2}UP:iL1m@QK=p y' );
define( 'NONCE_KEY',        'nwc6/Dr)>`<T[_]gfyXb:fAzSpa-Hiwp]k`-|sZ!/oB+fq.=J+2M.aLrq9WD5e^]' );
define( 'AUTH_SALT',        '[Qz8*ctD(GXPB.<&Yc3Q|%rHtmgQ{ahPTVglvdQCf~$VaKMmg:@pf~]/w?q.zn#<' );
define( 'SECURE_AUTH_SALT', 'm%bI7|hsq`TWK5-Pv+WMp03Iz.usz01-!`,_Q)J~bU=NF/UF={0bAaZq=4K+y 9y' );
define( 'LOGGED_IN_SALT',   'd I1J)S]]cffMhRBQsZ0?Tg>O?0h27{NU1=ICm3JL}B<^^EAJMa7]+NLaTZ/6^{|' );
define( 'NONCE_SALT',       '@*/eokvPXI35Se{Mua.V7HUa,Rc!vN:M@]{.WaeSm{Spjg4gG$uW+AAE?^%.)]wH' );

/*#@-/

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
	define( 'ABSPATH', _DIR_ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';