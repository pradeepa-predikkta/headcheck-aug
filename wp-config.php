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
define('DB_NAME', 'devpredi_wp542');

/** MySQL database username */
define('DB_USER', 'devpredi_wp542');

/** MySQL database password */
define('DB_PASSWORD', 'Sv5vL5p@6)');

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
define('AUTH_KEY',         'imdrcsonwiwrc6noudqlwfcqpijy5rsfoz3e83phvsejkvhxxf3omxl0okmrec9v');
define('SECURE_AUTH_KEY',  'auwc7spm2nyjmlveowx2owmjgii29qxjl3fvvs1umstzzxlwtanccmkqjxqk6pjj');
define('LOGGED_IN_KEY',    'rparqqheva4edzxwzmzgeie79aswvl5enbmybyizeqgurt1wdhd4xbpgohjwkl81');
define('NONCE_KEY',        'qfhxbdqjjlpnbaurwbx3sb0urw9pjpfhgw82e1sx72hqzuuhrofmeltqds1pacrm');
define('AUTH_SALT',        'islxvoypasuvqfgttycnumqrgicbis8r4ge8bvza8udztaetglb4e64llrhrqrpt');
define('SECURE_AUTH_SALT', 'vx2q4cxn9od7ep6k5jfqclaxmisljgvpvbai4wba0wwvppg8obcrqzqcjec4syr6');
define('LOGGED_IN_SALT',   '2lb0sd3wrempn1dw7zt6htcwzxtp6jfnrqi9fmdactlinkbkvlucccfjj8eladbo');
define('NONCE_SALT',       'flsfcxcmrcozerekt0ibmm3ffppiyjcknxoqtbdjzezlcyptqnozcpwjzjrf1ywh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdk_';

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
