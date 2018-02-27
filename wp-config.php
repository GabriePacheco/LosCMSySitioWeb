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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wRFd&<Qd#-^]L)XX9S+4Gfzb8|BFq@26@iXDtgNO!/*WQ*n8x-TNGcR}wvz2t*`I');
define('SECURE_AUTH_KEY',  'lTf*i1&b]d~$McvP~Gi)Z ,6eRiHN:NGW_Vle0tEj0xyVX1d Kbc60TA-^qJ dO%');
define('LOGGED_IN_KEY',    '6cjwLnvNa;yQC$nDU9DZW2}b2+$tMlT0%NhTK[5_RQ `w)xWj$?`sHF7=D}`*2%9');
define('NONCE_KEY',        '{9K`S]!}bV/]2-eY;FQLZr+#*$qiVVWxpG>d(dr*$+QOxB@ZF6tZM0JJXMV{}<%G');
define('AUTH_SALT',        'y:3z]D{5QRC#P`oZ`n=7`F6tdj[wT:wGv:EA1qw$oh6OMn%gd`=F{Z]v&y*?s$-Q');
define('SECURE_AUTH_SALT', '(gORMi+oJrr:k}7-5SVwBV~1Tk?$1&9YEFa;.]gq+^%zzSKs2.LM[7u/ykD[yJ&]');
define('LOGGED_IN_SALT',   'Gvb+4pojA%QS|97xPWVxegx:F6CIiO.r!*PVOBK?Sh0T[0yTImd`ox1;XiMXPMEh');
define('NONCE_SALT',       '+v3z-hgz6@qBKT4AEv)FajxdqIoC,tOtkTyaK?:sV#v;3/?`RY]oi ey]LQySCv:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
