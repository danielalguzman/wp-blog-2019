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
define( 'DB_NAME', 'wp-blog-2019' );

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
define( 'AUTH_KEY',         '/{HHhO/GQGI:z!fBs.~8lG*qBV8H|=Px_bETHm8dm:l=0TJTNO[6Jgg2`r%GZozS' );
define( 'SECURE_AUTH_KEY',  '}>=!w!6(r.%JLH|5+#pP<;JU|(eqoN9`1}>GR5yt<$Z(8?Uf+Pes vwt|#6W|?bM' );
define( 'LOGGED_IN_KEY',    ',d KuQ*m:6>o/C{&yaVhy,&@C`@m{`A44R7(=t=^1~NljVVIZx</lRf`7}>K{;Nc' );
define( 'NONCE_KEY',        'S;faKY-SaZbbc<9zru;pefMmp]}C/B{LK5r-mSr$ex>iiu7uVdQuinMf,VW(4g3U' );
define( 'AUTH_SALT',        'p:#,]$F#Y,Z&%c@tb_ NH5<,n]6eZs*&!J+NWvO}%^/v~H!%s5/.cf95!H+U*1M ' );
define( 'SECURE_AUTH_SALT', 'UQnY8q+q:}>K]%l$GJ0Sxq~,a|>`#Px!zI A|;h-KU|eJ,}YJO}i2v*rU{;C%mDO' );
define( 'LOGGED_IN_SALT',   'Bfg/zt@XFB&xLGjus5]pySa9/sbfdn*_0OT~i-!VFas#6S.H>hJZqVW?rgDJ{6+P' );
define( 'NONCE_SALT',       'ldpE|tQzcD!3lTSy%>`}$7e%L/(0Rar|ZxwwaT!:Vz^)TtJ,iEkkT=_3T1`^sobG' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
