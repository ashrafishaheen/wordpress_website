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
define('AUTH_KEY',         'r4fQM|##10</>kbSimzANy1RgtXvuX*B#+zA<iga4c)Xbl@=x/o,LWGuQigdK?K!');
define('SECURE_AUTH_KEY',  '#pD{&0JB=qk_H-Na*1,4u*BJM#iXQZK7I1$!XX2?Q,-18Bb!~59EPp5sL}a3/zy0');
define('LOGGED_IN_KEY',    'cf*+u`d&_k6{1O3VF#dy$s%N-.l*M*k?4q^=7<M8e08):2#e/2PF6)f[<!4&*[Xx');
define('NONCE_KEY',        '3DU{h&0Wk,7afoo)+SVy*dSmTK7!6Zbin?(/rxycCNE?D3CIp26m!,4wX.aLL0tI');
define('AUTH_SALT',        'JYuK7(!{X~{eY/2->bA88Hw|nx<8v(AWZfs6Q^K=Ard^6DJl?eqJ)lNeJC?!mRK3');
define('SECURE_AUTH_SALT', 'b&87BvV6}Hu<m?>TYq+uly`g@ZtllN P;Q..wlmz&^szJ]_i/?<e;M%j3mJ<S=/S');
define('LOGGED_IN_SALT',   ' IzGPJSQ~L_^$G7$OM!j`jrpgJA.$gbF$_WI Ty.=ubPD`pab(R->9Y`0m9aee&C');
define('NONCE_SALT',       'OXfJJ7*v$)dPrEu/_<C[,^|bu^iv,b/IzQ,R,,toV##s)N$>;%= _!gE^xX>8+:D');

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
