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
define( 'DB_NAME', 'alura-intercambios' );

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
define( 'AUTH_KEY',         'dm,_/M[J.xx],8=%u!GKe*Y@Pyf^Xnkd<CA @P)diYYM+`[xd;(rFN#n9!9nY.U>' );
define( 'SECURE_AUTH_KEY',  '4&m)pF-f_1)95p]Gpa%OLGB-<{4C5|mZ49#Qx3I4p`X(tG)zZIWa=q|zSI;x2 R`' );
define( 'LOGGED_IN_KEY',    '03IX7^X#Eu5);$`[DK1x#^Q:m OBbEpy6LN@w-:|FZb~BG}<3kdG/kQ2p/bkBY_)' );
define( 'NONCE_KEY',        ')~.V`FfJ2n4u8Tah:U3(Ws[-0Xe:e?`@:5A3#_7!Ac~VG%@Wh[BP@;?[j}p8Qgu7' );
define( 'AUTH_SALT',        '#VZ%Hm9<GC)O_,=4u--t /&zgPg aw7ef y}&&yBUY8fh6D4Hz:?B5Z&$n~tpyTm' );
define( 'SECURE_AUTH_SALT', 'gJ4s=8N8%8%SXA5:zB(gG3?v)8U,eXKl!lk+9^||J:>i}dOW$/UOH}l4=gpeV7ZL' );
define( 'LOGGED_IN_SALT',   'UJ.)MDgEUKyz_n0nHYt|W>}T*Z2N{l=|{$ROA0<3K#m)I86`4!j 4fkx;HY]#o{s' );
define( 'NONCE_SALT',       'tKTb-BV6F{;!f!{h}DxTd2(5~^,gdg+:,o,9HmRe0b&W?Hz+f{sE[B*)AFST0,~+' );

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

define( 'UPLOADS', 'wp-content/uploads' );

//Este código deve ser inserido antes da linha:

require_once(ABSPATH . 'wp-settings.php');
