<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'NAC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#(PQ+@Cy0:X[}bNKY9EfqX0RWuj!62y-%S%m08#.Ca+AHQE1mt{e#Mtg~Ls0xzJ3');
define('SECURE_AUTH_KEY',  'B8j6 _mSDv#*cW?cc[~~+n#N&4%`:f)y^o~I~RY < X)[KeDUJjl+8+T6rXg9+)l');
define('LOGGED_IN_KEY',    '4+CLS[gj?(hoi`YJnDv7?Pk2M^J(*gst|A-FpcQ@n[z@r1^i6Lv#;!+ZM*DLHq$J');
define('NONCE_KEY',        'g*ew Z+<.q{=xHJTL*m~HoPZp=0AxGPoHSy`56%uo2g&~X4,V1>/}b_uMw.!WIp@');
define('AUTH_SALT',        '@?kyy4x40d+[&hz+gO4Cj|=SO7pB^dg,<_U*#%[{&6yF][np#QVbfCDFjdEY;z`#');
define('SECURE_AUTH_SALT', 'D(g^-%;>D^IcgI5r,|f97aSAvk<g4x)/XlY+_c1s.6MYjel+RB(4z<P^)$,S79kY');
define('LOGGED_IN_SALT',   'O[JlA!T|@$(ryp,2fYp&[a.Ikv=S{0MkJ/=08@J$5)-{z~Y74 c^%m7ocp9-{?lV');
define('NONCE_SALT',       '4/$f>bGek:835g^B%=gQ/=wSEiAjL168>?x)&_`9+M?8M>)4Z{s_1?3(2{,FHX|S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
