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
define('DB_NAME', 'spa_db');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'I4HT10J.D,Ng}(4%`qEwmOJv/e6[Dd<D&lz>9<6x!bB5v7YN5`|JOu3wemRyb0:_');
define('SECURE_AUTH_KEY',  'XNA[dZAe{4a#@f`vBs+RK9D4_V~AMsV8,XcBm}YyVhr5M#+PnE;~H+ZHy7#qU>3M');
define('LOGGED_IN_KEY',    'fB}wAQ))a-7tcWU1OZj41^8PW$]MF@&Znx^PJklQ~Je:.cn^gUChjrINO,(h{e=5');
define('NONCE_KEY',        'PeMb RF}=reV~:d{{NnvW|SItI;_aK7XfX&C2X~q4=+PS^@D(_90B4C#:XD~V+s*');
define('AUTH_SALT',        '~F)hebIW*qXU4co``n9rDlZZP5^0eHCWg*G;22XnjW]pygW69)R*/2nbG4M>0+.=');
define('SECURE_AUTH_SALT', 'okJYUrTeW=rfQUCSPs.%9~qO4+f]S**=hbjyCCqoV~@7aH }U%/ddy( ^+/lNUPo');
define('LOGGED_IN_SALT',   'nB vQ;Kh,/QB@>e8KF>)%b%1?_2AB8GF:y6fxZ`6Pm?!kG^wZ=+C90MxxqyjR)RC');
define('NONCE_SALT',       'PeyX0N(h[mSsO3fW`8EkIL,8T7fxyZa)4X]VS+[H=eA&>x*Q*kw&wRLWQNy_v{Fi');

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
