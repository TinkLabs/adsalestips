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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'james_adsalestip');

/** MySQL database username */
define('DB_USER', 'james_hill');

/** MySQL database password */
define('DB_PASSWORD', 'RjRAxUb5');

/** MySQL hostname */
define('DB_HOST', 'adsalestips.csojfhhlojxj.ap-southeast-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'px3WFsHm9q8DS[b)/.r+4go>]ZGBu3h8[w_1z%U2w<(q%G|GtfubRk>Kx}s9;_WB');
define('SECURE_AUTH_KEY',  'kZLue&EovsbIWPRf1Sn^ Na^_m1z7E,b%a+dR#zkB^cKE^d5jl7*OfTD6c]+ruBc');
define('LOGGED_IN_KEY',    '^yKD`=O0l<yi6&tUw$916_$.Hv7mN[ &@iWa#(xv.UvllR?DN^6gu1!Bf1+w9Qa&');
define('NONCE_KEY',        'tiF7,^(t98[naca*<gxRd!#S8t-a*{wf-(#}Z{}yQ1cq]@a:OA4mSwtH3zPPx+iW');
define('AUTH_SALT',        ' ,O*Hzx!(JY(2M^E3mk2]w)Nc:,b=Pf=3bp%L*.X@v2c5DzjdUL+oz,Q5=iLg(Tj');
define('SECURE_AUTH_SALT', '~={u+Bg_+gyud$itdo}BKzWAr4!r^16]OEE`][$0mK cXip+$q2_Cee@SSF}22%j');
define('LOGGED_IN_SALT',   '; `W;aeM{FUA7m)tqj1ob(S!vk!idVQ,K[K~&nRXG=18m&{T::udA (=l;S?|]9z');
define('NONCE_SALT',       'M}SKTB;o-J7fNJx#J1V|e1--E%)Rz(<@ThB6&O&oHGfqgiNJ=ef?Kmb;d,U7ZD~g');

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

# Added by sunny
define('FS_METHOD','direct');
