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
define( 'AUTH_KEY',         'o^xhE/Vu#-nFqh>8k2j!$=WbIOfq8KSVfZ*UMx#O0DQy 70`xhN7I/A]7p>AP9)6' );
define( 'SECURE_AUTH_KEY',  'OCdJ75V3R3fx?${Zl#o]lNrB]#azHEX!^ Q]Ik~>/:0z$3|r!&hNzxTKpU;z3jUC' );
define( 'LOGGED_IN_KEY',    ':Hrv;B6f,+xZruBd=S&aOC^{brc vM^k$<U IFEw{-Gmz+nU6j.2Le: |/!3++tp' );
define( 'NONCE_KEY',        '6Z+?Z4iYq0CYY1=>8e+8P/Qv+Dn3-xw38Mr8)l<2RUf0U$ZJh_%gQ~q@ndRcGvQX' );
define( 'AUTH_SALT',        ' a,*08NVt~4Nt6^`^fH/X~nj;C0tf4?Y>mJA&oLJ6(E98S;V/`mg:i{(H7a<(<eT' );
define( 'SECURE_AUTH_SALT', 'rDdd[>d[XiVltsQy*65p:WD`G8W9$Jy$0P2Sq0W4/DuPyD* vtm&_544WIw^IC8`' );
define( 'LOGGED_IN_SALT',   'CSWhu|K_H$}*G2zORd5U>BJ#)7b#)1re3>HS]c|^ aciNaSPh.Zg*OKh@dYm+IX}' );
define( 'NONCE_SALT',       'y2;YmP{8}3VKkO@JS2~2Dt;?}.?Y%kg{x)3:uWb4=};)i3^n4dw[,SW#M{QaU7qv' );

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
