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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id20932155_wp_89b9645b6b6dcb31c3af1918d2953c99' );

/** MySQL database username */
define( 'DB_USER', 'id20932155_wp_89b9645b6b6dcb31c3af1918d2953c99' );

/** MySQL database password */
define( 'DB_PASSWORD', 'df48560a163bab695f4ed3feffe42b4084e30d5e' );

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
define( 'AUTH_KEY',          '%Ngf}2Q(?qUw{h)|=/>sL%[wSW<{dAFxJ%)9t>BC78+{%IU>FBq.gaI#O9BtV/19' );
define( 'SECURE_AUTH_KEY',   'ExLn<3`kXey>@l.C`S[%Ky85sSe~1mFvO(IJGDo&,67m`ZmAXe=Bf$^>*819y`$A' );
define( 'LOGGED_IN_KEY',     ',U-{#358J(Y=@1Hf=G`j3-)d;*X4p{Gy#7|2$@obupLnQc{T8[^o@@_]A&:;)n!8' );
define( 'NONCE_KEY',         '4,p0J>c`yMXyEXkW&e@E:iW5W19&q*s|&=oz]NC[FTpmv=j:81B8YG)r,)Sowch<' );
define( 'AUTH_SALT',         'J}<-CxjssG(py,k!M|u#jb?;Lib,C^V[`@Hwm #r`W9l)B1{X/9^8#)]oorg~v4N' );
define( 'SECURE_AUTH_SALT',  '*WAtT1KVNN$VlQp{P-I)`,2Z?!]OOfDTSCw7z39V|Do:I~%oI9LD_Ae#On:S3{Zd' );
define( 'LOGGED_IN_SALT',    'Xo}i8zb*5N.(][Nr/pSsCbU[2myrIcf7-^]`On0@o|L|B(mMeXP<4z^5X.^h1Xlf' );
define( 'NONCE_SALT',        'QSOY9,#!xD9|Z*GP:#PTE4%AT>c2A@tXaF0bD. 7e;$$*I@Tv[/I%+a)aDxMB#1x' );
define( 'WP_CACHE_KEY_SALT', 'r0z&pfjsPHN)<1p/JRtgH=aF4D!Ov(rm.d$G7We@9UI=uW/Wi1T93%&dF]6N;S|X' );

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
