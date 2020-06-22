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
define( 'DB_NAME', 'wpeval' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpeval' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'gWKaE0jsdjh585BV' );

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
define( 'AUTH_KEY',         '?@z$r+d1KkgY1=)d!+L}ky(@6(gZpts1U`1W_Ry(_`NCmQbh?_E>Rd|vHi=.TI,Y' );
define( 'SECURE_AUTH_KEY',  'w~[Q31?HJ5E(=X]ajOw{;*fTAAMaH,1bsIf!SmbKBD[-kN+N,05y2Nk,T[pB6}/8' );
define( 'LOGGED_IN_KEY',    ']>,y*j#_Nt]^ ew2zRrnI?]-e3:=6`cbHcfF;}/uq;7_?JTE1UpPQ7F_Ms5`HrW|' );
define( 'NONCE_KEY',        'f1hvXq:?Y+vKRV%q [~b]|+Qz>uZoO+{}?fCze9iDe?b(lIWg+6t[Q@.o H3}h0K' );
define( 'AUTH_SALT',        'uXodal)9j*`Eu(]&.B{r}&|RY}.Jpqr^V0/[jSR.[J_+SvHCC4FKNUe>wI~_:rk_' );
define( 'SECURE_AUTH_SALT', 'p2cHke. ds1NEe!TiBK^;{)LLw$W]7.1,q:`H&Jq]qO#yEjz4E,<rB`Am7|IU@)L' );
define( 'LOGGED_IN_SALT',   'Y.H.W!XIC+kIy4s?a5g>42L3VF1WZ*b9W?IPx)}#m1FthVA6mo+}NpRW^Hf`e6*Q' );
define( 'NONCE_SALT',       '~!;m(J^?e@LwX_mr>SNUOv~b>R*it!nWw8f~Ed)G(?0 $&&*|t{&&c+sq/9ysDeg' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
