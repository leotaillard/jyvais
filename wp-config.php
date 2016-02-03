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
define('DB_NAME', 'jyvais');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'R&Vcp`%SMyonM}qA)/p ;+yeJ0M@{/b>Fk<a97+h7L1nIjK2d?Dt(+_--v# h$@f');
define('SECURE_AUTH_KEY',  '`wY}&[4Ce&T@$J+m7P9io)XVzk5B]c({Zr^%2(4`Ko6@Nj8ff_G8%qeA]G7/{O+n');
define('LOGGED_IN_KEY',    'O4iGD>dxrNAFC,f0Xo,9Z!NOI]8}(IsOe@izQNWK>~|0TqU2d*,I;ML0`e|NjC)U');
define('NONCE_KEY',        'N_c@SpqUQmMrSh#L)hr,W6`Fv0}VVCL-,!m*D`zZBx=6>1l0ps=ZylnR[Aq{&ipF');
define('AUTH_SALT',        'mfN-]YA27P3diHUet>|4_(@VjmhsF:igB=+~7aX1t:Q~^g>a)0/4P-DPC298mXuq');
define('SECURE_AUTH_SALT', '!m5&.~:=0(m0gdt|bL;!>c;iC2_v]h%-dihy,-1g.ny48JCVN[rI-}1/Gl!y}u;K');
define('LOGGED_IN_SALT',   'NgP+T]_tb{Ccq||~ljZJ-?u+Bl[u%*&-&2*|0 obB/@/lC]7hw-F Q$|PC|q/a3}');
define('NONCE_SALT',       'wapk4l7X5}r<#@]7Uxj}v?tjEyg4!mjX6leC&J;kxA_O8b{F|]%EG5F-iT~(?PMu');/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'j4v41s_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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