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

/** The name of the database for WordPress for local site */
//define('DB_NAME', 'interfis');

/** MySQL database username for local site */
//define('DB_USER', 'root');

/** MySQL database password for local site */
//define('DB_PASSWORD', '');

/** The name of the database for WordPress for test site */
//define('DB_NAME', 'prostosait');

/** MySQL database username for test site */
//define('DB_USER', 'prostosait'); 

/** MySQL database password for test site */
//define('DB_PASSWORD', 'qJot1Nex5');


/** The name of the database for WordPress for live site */
define('DB_NAME', 'on3ay3g7_interfis');

/** MySQL database username for live site */
define('DB_USER', 'on3ay3g7_interfi'); 

/** MySQL database password for live site */
define('DB_PASSWORD', 'res29&1wshu?8*hj');





/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'AUTOMATIC_UPDATER_DISABLED', true );


/** TDISALLOW adding plugins and edit theme */
//define('DISALLOW_FILE_MODS', true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A|8KT!.#>n3SsD}6[:f>3k4qoGXz>0:@~~qrTRx:&&v&h|(Ds@4GHnDx|V;G|8#y');
define('SECURE_AUTH_KEY',  '6T_D$swaF`1q08*@ikl7N!jqS,^OYJnZ6iN:q=Mp9Ob%R@z>1Y.~Uqv{A2!Fp<8h');
define('LOGGED_IN_KEY',    'GxxHgg`23QoyQ|oZ8%=Yl7rH==Uw^kO3D+Rbc+P+<OnbxF48K5t+b7@f;kDNLjv7');
define('NONCE_KEY',        '}q4&dOcl!bMEY3Sm%,=nR/4+kD~!Ow!5Rja{Se.}0XQ^F+|8#SDoW,a,AatEl.<<');
define('AUTH_SALT',        '`kLsk)~,$>b7D#DiNK5W!1S0<$<_g}if643(lEHS7M8wV6dX6^YSb+Y:gb@7+fj$');
define('SECURE_AUTH_SALT', 'K.6RE7wojU.6e{,4w5Q702rKs<UN.$y10`Kz>DAYqq6yWt/A25z0&5Q@IU#M4.EF');
define('LOGGED_IN_SALT',   '$AqPS!FZwe1O0L^pjhKYO*GjTo5g&K0$~]t|pciY`IXWBQwA!<P0*%Sl?]dQl!ln');
define('NONCE_SALT',       'id2y9Az}SUnDY&]LEggJ}PC&q$Nv,}K}&{~5jI@B`lSfxd}{_sn[vvYEY![<}&:_');

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
