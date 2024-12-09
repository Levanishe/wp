<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '9e-m U4kiiPyd%ryt0h?ev61:~QURbQU?,wS+w7Qh{5-]+@7)nq|K4EuT_tk[^P7' );
define( 'SECURE_AUTH_KEY',  'HM)Tuopz<@},Ki~+o{jV>35qE&n2[bwk]GW/P##y@^69V[;1,rL1g3yL.B+_zGgO' );
define( 'LOGGED_IN_KEY',    'Q(Twmhq^hr1@6]!h7lB|c]`f)|(kb3Me=g-e K%E#sUP-1w#`;RqQd)Owm9JoX&f' );
define( 'NONCE_KEY',        'eDl`c0,qj|3_Op(0C~Efn#=kr6($D??ll~Em]8&kVdH|+(5g.0rXQtT-^4#es_DI' );
define( 'AUTH_SALT',        'LA=.3L17(3D3l-G_gE%6V?7(XBA&CTeeeRXwKq{m9k5r32y{u3+8=nY) i*ZE8FO' );
define( 'SECURE_AUTH_SALT', '!/k0i*lveLY}wSGB{uLJ1XBVyqf$Dc`q$*N@i1y}G|AOiz-OyM1T *0G1biHhtCG' );
define( 'LOGGED_IN_SALT',   'Y}qOfjH+,iG]hAPR9&CMt<9]ob]pAz)3ndL$G}^5xSuDs%L:rr9gJ%66|KJl/|Uv' );
define( 'NONCE_SALT',       'S**H}#%>^@b4zDXs$_jL!~OeM9XVey=2Ep9)3zit?jNG%i{%rjVN}F*a_.n:<?;*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
