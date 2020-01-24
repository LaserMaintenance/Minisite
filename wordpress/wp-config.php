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
define( 'AUTH_KEY',         '&Y[MhejwE/7cpnh].4)yaXM<l#^a<O6@GOq9P@Y9V!p&g`g-MB!gI%OkPgCyH/ l' );
define( 'SECURE_AUTH_KEY',  '{yr#U$zx{Zn@XG ryh/kj^@I9A5GJ^KL:{nGr^M[ZMT%1D>IPK$CFq]Bd%1o/Oxy' );
define( 'LOGGED_IN_KEY',    'J@9bVCSk,[]O(0Q+ 0%=/($D=fIL^ph9L1TcOL5+wt#^--5#Qfl[t#ty<pX& xH5' );
define( 'NONCE_KEY',        '&wA<S/8Zg]dKajQ$gB!]A%T9kDf~RG&By#rKz@,MRIKR^aXViBB.Piuw?q{L>IIO' );
define( 'AUTH_SALT',        '!1>ZUO@V#%s?OL0TE{j.o8?Hv(wf]j/GE5jls<& SP2;PG1[0gyTfTo8a9f#Z/xy' );
define( 'SECURE_AUTH_SALT', '#dPrbZ*!Kpc3R-fUytP{fNU!CSn[2)(6/E/Xvb.b)JQ{ % Q91xaONh~u8DlUT|=' );
define( 'LOGGED_IN_SALT',   'A^K3x`Mu.pr&tDZw#qU-i})m;Pk0#B<Jcn-f ApJLlNNTL~B]:C&N6c2ir}7e2`P' );
define( 'NONCE_SALT',       'ZgUeZi,DvT!}hb84V$N5&R}b<3 XFuv%Whx:p*k|7l#&.(#|w-pu?etH8m#gBy+f' );
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
