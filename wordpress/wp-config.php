<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'TEST_WP' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'explorateur' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ereul9Aeng' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k_U)H5r<j?m0-,:?=+[_h<(if)RVH@s[$2K6jF:Dool4y@%nmP8kLLfitSWb(eDn' );
define( 'SECURE_AUTH_KEY',  'i2.K QZ~*Bd@$y$g<^YQ.)XdTfE&rRA5r(R6&?=Y7=&TJV%:_[FED8=t9CG#EhlC' );
define( 'LOGGED_IN_KEY',    'Jeo1?MRjC=5|p2K|Y9iNl9T9(-6ZH92-8YrS<S]Wc]rJ>-/2-FnO.Cv5*LBet]~4' );
define( 'NONCE_KEY',        'QYch/,temZEqXT_:Y~^Na%;d28pT49csGTw+N$_biepFoB`2PX*2kfAajm2!n2d*' );
define( 'AUTH_SALT',        '->^{owaQ.RQs`e2%:]&(w3rN[&.85%bV@=lYmUllJuihWf[RO!z@Rkq2Y&^1Ka{q' );
define( 'SECURE_AUTH_SALT', 'nb 9cT6q,f7;g(1~>-P~<WizZnI.J@L8s{mj!2!Wu-z(z_RE2-maT%n5;2>UExf<' );
define( 'LOGGED_IN_SALT',   '9KOaB|f4_KyyrK;.q{}GiMv4~uo997>=--|R75K^xwM)}Y[fO*Hk/8gvkE@XWIYC' );
define( 'NONCE_SALT',       '3v@JWH#[;F#+V!F2vuJye}X%&PVl@x^^fK=I^t >j_.R_hVG ,0TT$`Ww Rub1nd' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
