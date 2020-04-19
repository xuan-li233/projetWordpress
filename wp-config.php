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
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Jy2:mNyO#bQC7chON%IFkmQNV13?.Jp`:7o}>P:H*SqxM^)c:;ZYtT-!>*$Rr[=.' );
define( 'SECURE_AUTH_KEY',  'J^X>Ct;MHL+?d)h/>(.rG-Djrf]?kgWa~La0b4jY|2b|C2`SQ*MV3c$iTJy`9cG7' );
define( 'LOGGED_IN_KEY',    'f*._?VM}0B8t~X41N).L+^6t,.Sq4V09;0|Te ra(bDn_nC?rd,:ab|8/3<aRWk%' );
define( 'NONCE_KEY',        '{HT/>D<g IM*C4(!&4[W6MuR**U)1{YQ;KnUT-w0I>A_%5!grBX!Mp8x v_v0#eD' );
define( 'AUTH_SALT',        '5/Tt<nUAJ`??@bP%1>(JVA[$9FU:?GzDsL QhG&k%6m{jMox$&H{m>c!YBPu:_[q' );
define( 'SECURE_AUTH_SALT', '&T,<ME=W2+;&`[Ba!,.aZ_J1#M!x$,o`0o-5}nq+,b^GGR[%l5ELG:hWmS-f{~!h' );
define( 'LOGGED_IN_SALT',   'M(/<~ J  WJL&Gfm-Lsg=CNzqBiB}s6uyi/(<{`!5Sl+mJS=Ecjd.Q/B?`4%&0T2' );
define( 'NONCE_SALT',       'ug.t4ruSQmE{h0+`5-dH@(1ZHV0@b4V?hlM[+~b)YnU~(?ZY[6VdzPn[(,o+8E,1' );
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
