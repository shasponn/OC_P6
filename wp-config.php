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
define( 'DB_NAME', 'projet_6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8qaig/DY$&_|O?lHl!K-oUWMub<&MI}p1N-2L<Kl&[^T*?e({bX<E`I5w_<.I1~K' );
define( 'SECURE_AUTH_KEY',  ')J8Epcf_z=_h,V-cb*9t6t+62!Rduaq9B+z~S#[hlmw~|&mxv@+LqaAhvh:9$Wb8' );
define( 'LOGGED_IN_KEY',    '!(5)jDz&,QX$!#RT%k._;l(}&iV&j=(ttR(-t1ByW4UG=5Cy;az|PZH-D&6U8_v|' );
define( 'NONCE_KEY',        '?es?c^o!gw<{1Wst3$C`_5P.|E&`]~)1Nmxo#cEQ2R@3UC<}f~<dF)5v9.yUULDh' );
define( 'AUTH_SALT',        ';MIh+n$fsselqiyh%*b(nQf-v.S;!Lry<cD0&=^oWb o_W*a%/SKgSB`PdndOF9o' );
define( 'SECURE_AUTH_SALT', '$INIKBADD{5dga2b!Y6@@f[}D&$5DeQ8H./>US2OB}3mNdd15veHL1[p !#C3PSN' );
define( 'LOGGED_IN_SALT',   'P@$En=7!MA>fw%@*aRKbB51p,9=a9y4ftNY.8$B:Q95<dRsnVX{6Y1OVukrEChj/' );
define( 'NONCE_SALT',       'N%J z6!H<eTMt-)_zYEW@(j-T/i!K5z;x3RiR;gr6Y72qC)4K-H.wDh}#OBX/8X5' );
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
