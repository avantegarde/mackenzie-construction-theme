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
define( 'DB_NAME', 'mackenzie_construction' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&s254fNM#m+.bXYw_VNk7fzla=>T~Jxa-6qC5ujT]pgW,,fi&j%kfh</LlMwyLa2' );
define( 'SECURE_AUTH_KEY',  'D_HhSQKcL_nTl*lC#=T|L,nnd{QeE.u.p`<?: y>UOTbg%Y6O$N@CSc-W;p9C}S5' );
define( 'LOGGED_IN_KEY',    '?1Ij)6^tluibpRY/YOu5ZW*@CGPR5JwVKpWV 1@F?T#N5G2(d1 1M)T@G$a)?J46' );
define( 'NONCE_KEY',        'pIN&F57|d?x)nOcYIJ~;AYN$N?Ohpm-y=mTC,zbkT2n=x=Pv7y|d?IaKik%0(9e$' );
define( 'AUTH_SALT',        '=5]kD@^Tloj!6:C$XTtzoq<W.:4Lc4I:~iPV1<2sgXt=?]]|Ftea[]K?x%KRFm !' );
define( 'SECURE_AUTH_SALT', '{(2^DsH`V-O9``c?cjlFQ QY?m;7y@O.7a:F7FZ96t-l(L@73C9U4c)zouzo7KwB' );
define( 'LOGGED_IN_SALT',   '3%Y1LqXqzYvoFQj>f_zT,Uo-_9e:2GVwV`ut5h2lOs)(TdnQ0Ir?xNV{jIlo}hqL' );
define( 'NONCE_SALT',       'LL,th|i!KIYzYqfFxA^rBA.;[d^^{/~%`Hj2c<6aPhM}fu-!Ol-;FbO^jBY5>LR0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
