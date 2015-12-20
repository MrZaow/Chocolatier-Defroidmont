<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'blogchoco');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '11ez`%=gZ*:|_J35<@vhTIigdq* X|@Fz[0Ug_!lT:.>Fp&?l+qVRCw_@Vjj~?ef');
define('SECURE_AUTH_KEY',  'B7/Q|i_pSj_x}sb7B{,NcF{Trd/ccHG|o.u-^,Z8|FSn0[k:N[59dzt8DMWqfh<k');
define('LOGGED_IN_KEY',    '+I<a`8Ezil}t F-<JwKlU^yo}_u-d_bf4J|.WE(4/]u-f@2h8z*=O|k(CdnX/? m');
define('NONCE_KEY',        'Y#.)DyxR)_qp8~ ;%g)QH=a`7-AAn]Cnty-hp|CcW?^y1;.]B-t!Y)&lp|8]r2sw');
define('AUTH_SALT',        'F@Rsx4}~VmrF({p^UY~Ca5,%l5<|;:xQN*2W%x|RQ;NV+uJ; ~k_uVm-+ZOA>K@)');
define('SECURE_AUTH_SALT', '6?@eUt39zn,7A 8B +O3$ZX2}J#{uc+34|PI+ie%& )k&V%U+>ahk-)L1F[)MEeI');
define('LOGGED_IN_SALT',   'hI,D:D&vA`@|M.}gWAk~1Dq*j_x(U._I 32y{D5e-<c2p1L:n!H.YN5:{/(8Lgj}');
define('NONCE_SALT',       'S3h$Lw+ ,w0Rj6w6wsk~Tk7,Mu-mEd!He[uw4!N~4i^oS]cr:}2Z}O45s8(5J^<e');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');