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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '<Gg@B:-}j_Z/7`GohXgNT1r_l]tl&4)o1*}`~3yfQ50x#*OgO}-<C/>cp];^-Qgd' );
define( 'SECURE_AUTH_KEY',  'Ca}Fn{y7gN-b6)}26DX^y0Oqq.vq>oGL f>^XN((s@NrnZ*PVWYp>~ws}{B_MCpR' );
define( 'LOGGED_IN_KEY',    '>_FDV74N{2>9m|>KkB&}MoLx|vq{,1W=w6L?HvjY&@_;f<fj:nwzA*<u8ByWQdak' );
define( 'NONCE_KEY',        '~bvw>]c^dQp1 5hae{3TX@?3+=dTi9_wJfEgDo|!Tf2[xp0rT*QtwMM Ci$N{u/e' );
define( 'AUTH_SALT',        'Tj`]bDLY8]Nc<oK99scGCD_(C!xmp(Qj!)K>2!2l)g:tEq/$8|fupi3/Dj}z[KAX' );
define( 'SECURE_AUTH_SALT', '(-aG!e>?D3qb,CheK$O.EPA*5uwYzg=/K[jx32ZtOE|@kb_oFV.9kJ9Y|}(=SR8x' );
define( 'LOGGED_IN_SALT',   '}@,NzK,0IMT6;]!kzzV^dUT{DY8CM)duD?R!=MO|f2CRLf!U*c5xVaHJ11A_ N)n' );
define( 'NONCE_SALT',       'hk[|%71Dwg@x:x*uV2ev`,x=&77q0J.=)c,5JMv6_lxar[D>i>gA*0y5ZP~QLg3[' );
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
