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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'agriculture' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qcKtB^H<yk>%]~RL{ce<ejC<CQdy)P<Yg74~a=I%](c_FRv@7/+^SolXiHDh[wGh' );
define( 'SECURE_AUTH_KEY',  'xw_9j8g(<v{ lz{6`jvsBeEJjsy_q3x|:kW0p$8,T=mOXi@FV01;Ac1WX<+S#zA:' );
define( 'LOGGED_IN_KEY',    'Ji&6kqDlRgIdi=52.E9R(up+{bX@M69=Udmzzy5AZP >?:$8r|`ecsplE7H1xSNv' );
define( 'NONCE_KEY',        'jO$GTMje_^s,PKNpuaQoj_+D^61qO6K%^1h)G-,v2fZ%oc&<1euqNG Y*KfyOBUk' );
define( 'AUTH_SALT',        '-~_!<.*^L,8I!f4w9] ({7wbyD_?w.u5w6iWKnkw{bQE6@%vl@XK}Iu+,imuU39,' );
define( 'SECURE_AUTH_SALT', '_a,+W& 2-SPcvDCgF8^eX[6YKy*+DfOr)(iyR0zg,sU;>sy>f/JXT1G<<ZO)Q;Fj' );
define( 'LOGGED_IN_SALT',   '(7|!G%udP!mbN hWag)@Q:!<seiE?O%,F0Flr85M4<*rY?q 1F :=qoNkYOe(sU#' );
define( 'NONCE_SALT',       ']qH,m%EZ`vN2yVgp8NzjFC;C/TR0QFZ[-yY%w._>cPw?_F!5GmfrpbbMe)|#{OEO' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
