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
define( 'DB_NAME', 'idp' );
// define( 'DB_NAME', 'idp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9?BQ>L&gN_$ dL6TaP+T!%hMqU4qR]7t}tzjmN;5X4)=1bP;((*S&.jHF0TWI3[v' );
define( 'SECURE_AUTH_KEY',  'Yc`e B#Z~To<ls07^kT]6F*c;]62{v9A6]v5N[B;^D$xqb`{U$;64K[1t6XT<O-c' );
define( 'LOGGED_IN_KEY',    '.)u{AV,o<vlZR#S.5]b,6D|%{0Q+dbs.XQaq&aI26aL-PP)5A2-5?Xn%4z=BH)oS' );
define( 'NONCE_KEY',        'GFMDV,9RqFAx9S#t8pgX<wn}Hz_vdZX<~(dVM0V+g&Z|6u5.Ws/6 :BeqI8~m&+@' );
define( 'AUTH_SALT',        ':Vl!SG%3MchY+4Zni%;+/:,b-?VZ0wvV[Tzu<VH.7Pw5ndlDus=q2=.wy}p/PelJ' );
define( 'SECURE_AUTH_SALT', '.Gxk:T%GfE1`c_k9z^R)T5)y9dCHw;r}/B9bRdjN2NCrFUiuZ9b-Zj? #a&|U%4b' );
define( 'LOGGED_IN_SALT',   '(KMscxAJzV^si &9vW2x@t{p1b5I{e`f}o5__`RXU3.J^h!UebpKX+/8|;89`%P-' );
define( 'NONCE_SALT',       'FA;K]e@@Lbma:Bsw9d#^yzGT1K:%>X$9<s@b4ja+4-S>UNQ,v3f@D4[/.]/SZUK8' );

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
