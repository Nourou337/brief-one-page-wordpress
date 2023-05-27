<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nourouphoto' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ppKEiqH:x$hvC[7fK0SXL&-c/y.B/vgR`eEKGcTT(f&CN}eW?OfB1BGdk4AGzkuA' );
define( 'SECURE_AUTH_KEY',  'vjo#HE3i|iW4pYN-/9*_B4$hW/`mHK4~Ay8;Y+OmvM A<!M@@O-oCpqM?L!ypmu,' );
define( 'LOGGED_IN_KEY',    'V+6U3oEvk(:J.&>H6x3E*/:<)R? #m]h26MfBbT}C+.B/v&D?{@I_~b,3)xyoxXr' );
define( 'NONCE_KEY',        'C!;BC,nG 8?4!|E3EqhYh5yJE@h[RIOaEV(Utz3&9YD^zt(T[)a<9ccE.k<xr23g' );
define( 'AUTH_SALT',        '8?eouxKS<&]Fb<alV>53/^Fo;V,D}ZBspJClmI_*,^95pzL+ba6lC5*xGmwc0/ $' );
define( 'SECURE_AUTH_SALT', ';,/1Sqr<UIr rQ4S%sPGX<;nc`,jN8wze?xlB/`:h3o&HD&aNxD#zYo/SY/X#XDb' );
define( 'LOGGED_IN_SALT',   '?bS/=wtOtdARsT^{jcHq2oT2LZ/J9*jZv8N_`T3U0BgTsH~byK5Yyq|DO)EeK&JN' );
define( 'NONCE_SALT',       'S}B:ZcgY_;J@3&huv@<uTTK v<%i[/]eQ(<#w}=@`%xnJdimPJW]htDy>surtpC4' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
