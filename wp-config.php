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
define( 'DB_NAME', 'wp_college' );

/** MySQL database username */
define( 'DB_USER', 'prakhar' );

/** MySQL database password */
define( 'DB_PASSWORD', '94159454' );

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
define( 'AUTH_KEY',         'RI>-rFm,KtR#%y?T7ySABI#KWBd5ltR.jPmniyMWLbsc,TeDb+_DtCU`D9/&X_mZ' );
define( 'SECURE_AUTH_KEY',  '{ZnoL-<W/pJ90~K hDF@hR`VoT1igMdD=4l}E#m^lVAj{d`Og}nZL;vA> >*yD_?' );
define( 'LOGGED_IN_KEY',    'R_f]]M(CjhEk5=B^$0b8&R7u%Jry>WYq,i9>vhP0H#yrEy,9e|&,PuPg:#lnvFZ=' );
define( 'NONCE_KEY',        'zK5e)/Bi@vJ!`=.!yNn{Z%l[&vIrO8Ut[dR{8||#BPvT<uR8Npr}Y7&mM-&o<DHO' );
define( 'AUTH_SALT',        'L%m6%`c/_K%9~U=pUPd:<(w*MOR2O{-bE@5!aIjGrYbL^c^WEHNOPqp6up,_84P&' );
define( 'SECURE_AUTH_SALT', 'NB+[MBuO<o<Iy`2Dro_nPU:HfCchB9JNK~8hh!g*3Q@F~cwrTSTh^@tmEBI%jivp' );
define( 'LOGGED_IN_SALT',   '&V>-Gr[/5VEKsc9,5uXO]5!fD1rO2*5cSMeD<DzZa5Tm/4-y[q,hUfAPt(eBc+eE' );
define( 'NONCE_SALT',       '<)&FOL&,.39wp+fS8z3Q7?G!3/H}/?*G~%CW5.LX0l8fzu`NGDF,#eWZhkaw4K?@' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

