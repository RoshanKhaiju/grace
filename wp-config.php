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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
<<<<<<< HEAD
define('DB_NAME', 'grace');

/** Database username */
define('DB_USER', 'phpmyadmin');

/** Database password */
define('DB_PASSWORD', 'admin');

/** Database hostname */
define('DB_HOST', 'localhost');
=======
define( 'DB_NAME', 'grace_new_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );
>>>>>>> origin/main

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ZTZ8|C**N&S+@7UGi|NxE5#1Wm7$Dtf2%V/C],Ku4flZgSN`3tDF}Q0_.]KBf5Qv');
define('SECURE_AUTH_KEY',  'Hx0}G_X&;tKeJT54B GM_sd@`*@;>|hR#R7O9DoG4@#xV;97R561%-Ue{?Q<nR[J');
define('LOGGED_IN_KEY',    'l~K1q&L;_9S3`;,C}YmY%2ME0aTR&q0MeXUVutZ$(J|ag1v:<P#H}8iWK>em3KG6');
define('NONCE_KEY',        '5|+}a[o6K:! qTD;:|_Zyf^;*!bjql~,r)TqO)kk><cMRRJ4`jtr^U0A_>@dAdM*');
define('AUTH_SALT',        ' R+oPI2XibHkQ5LU)!Yf]Ho)~6KCBYHRXOXwxUv3C]V7fG*-Z:}z-,+H{Bupk+yN');
define('SECURE_AUTH_SALT', '$@E;JFz!RwqCVqK&-v%]:lK?^$(koKD@n1f[5~7Z,pKFoQF%7s7RUt`i@L%*8)8#');
define('LOGGED_IN_SALT',   '[2|Vf>SC|#yZ:A0:Hj2_@attuXmRYh7nqq$zv>HiOGE1voz[#e3n*{u,<KA >p50');
define('NONCE_SALT',       'FZkXyaW<Hx+sM<T=_.W:XKbW}=L.E+vwb9P177jC*vxDJUkw7VNDO-~qB^72#e, ');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';