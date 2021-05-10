<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7{IkxJ<3m[jj$zu.k}cPk#I00RtH J~fk0(t^qKV_$5gtEO[dwaL1j%$3xH|FbP-' );
define( 'SECURE_AUTH_KEY',  '1&*r]Cmqa]`oaEj3lr1b)6}{tFo HjI/&OE&A(FIE&e~Er0g*oXW50V,QA6}FHXz' );
define( 'LOGGED_IN_KEY',    'u~]]cD>D!{f&G[y]r[=i#%K<v;Y#O0X39:D,nUZK!PbiF.lJa6XV3F>Q1QfCuyZQ' );
define( 'NONCE_KEY',        '|tcES27Ax;-_n)3N(&M/H)@:_+0hgm@_ILr~E_]4_|cRxH;}8xf*6+suJgdb;L4X' );
define( 'AUTH_SALT',        'Xi61p0^V>iTfFG{(B1`IL8D#aQ/fOR=(T3#*mxw]|>0Uy&]X]n0::iy{{wh`iHqy' );
define( 'SECURE_AUTH_SALT', '*kYzWJK@T,:+bA;/3Q2`T|7jOkB{V0{U)(n_ymZvE>FB,`!rpVh4s7h@Y9KoY%!G' );
define( 'LOGGED_IN_SALT',   'I@WT4Eh/~SxZK&*5;Cs[QYFxo?e}c=D]Z@CsZGo*[vMAF$K=E27173U(1m^ EO9t' );
define( 'NONCE_SALT',       ';.vOH$i9cXlIku;?`0S`l/7dt^>eoPD(&<@xZn-8v)tg}~~/!zy8{+JGCh4-s$OR' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
