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
define( 'DB_NAME', 'test_act2' );

/** Database username */
define( 'DB_USER', 'BSOA' );

/** Database password */
define( 'DB_PASSWORD', 'shankyle' );

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
define( 'AUTH_KEY',         'IyydHIcuKKUZi0%k*_Azv1QsY@!uEA~Ia:+0&mt`4b<G2)kl<G$=.CXn,5v2L ))' );
define( 'SECURE_AUTH_KEY',  ')~s7I8GWQmT(zA;ub.=!meN8EGN^VFI0cIs^O=}^Oheemj838k52_nz,L/_387as' );
define( 'LOGGED_IN_KEY',    'n]9y:[qp,N4)K!g2(1sMN(4BO;jRN9J{-8_zld|[mOU^f3i`~u{d$`+m!XcruRA5' );
define( 'NONCE_KEY',        '=0f6&]F[. #mBGEhi>~/woJ-go(V4N9a#<I|Omm0O@1@wM;~SE5^(8^ZlqX#}TM ' );
define( 'AUTH_SALT',        'NpEY}6SVu%}$*$[$!KpE<^)|o<kI4[:g%6wR(!$Dp>GV;tu=n@YR0+4Cu/b~M1bu' );
define( 'SECURE_AUTH_SALT', '9iC|va3}SFc !ZK*TW+gm${`<s[Ew,6{G[BE%Zu6~jDk)+ kt3lH@`6_RDw<i++`' );
define( 'LOGGED_IN_SALT',   '|_.Y><ZnL5:`)?Bq>}<*mCpIu$p8b^;JlM[BKx#7I&~s/*tj$@D.NwjSM6ejnv F' );
define( 'NONCE_SALT',       '&E(SJU5G-1$f$X?+M$T%Z7]ts$bk>3*8kXc^5S5sCxP$%T& }kH8A`{^`YS5sHEQ' );

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
