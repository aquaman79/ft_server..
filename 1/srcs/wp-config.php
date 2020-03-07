<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'MARKOV' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'ayoub' );

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
define( 'AUTH_KEY',         'y|t66$gh+^>&<^ wbCeVE_ohg%IvOE1<pE|)&&{_=sTa?/il[+-IrAv%A#/B}),,' );
define( 'SECURE_AUTH_KEY',  'laP-({^_N=5w=XXwh#;uEZ+ovkt:hpkN9CRXy=DyBsL3|E-s&j9[;j42u]mDL2b;' );
define( 'LOGGED_IN_KEY',    ',PU-/H1]1e`5>]0sl@4E^()^ Plo4%HzcFTwz =yWadIM$(2]n6/k}U8@#;f;ZG<' );
define( 'NONCE_KEY',        'tgYY.Po}Uou:V>[[l^*>UO*S7e[Gt:x37UQ60f~>EC+}k~Yq0}.9a2dLaBIBTIPG' );
define( 'AUTH_SALT',        ';-#e=R}WQ#PYbbDg=?*SC.10;%G{cU]/<h,x}TyrFKi6v.t~plW*<irP~[<MT~]<' );
define( 'SECURE_AUTH_SALT', '2rsdOa7C&S@N9+!Bv Qc6BC>d 9z7JzOWqVNasF&B.{{Njz_j7]{-~.KK_ GkJ;a' );
define( 'LOGGED_IN_SALT',   'YsA(yV6C5vD7hSWH=w)%{yEcF0:!sVh.vIC[75w3TB)Fa1@OfWJ/QZhGJ-YgLCTG' );
define( 'NONCE_SALT',       'FIG(<DY/_q ro.>FB4&ND}IXd4Q|%xgDY~02YC8VX^CueA0N$FZ@^]x<De:F~+/C' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');