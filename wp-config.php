<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_malura');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>6@Xir@1T`Q?y~D_ufs*J]kpv!&<wz3gX>:cd]}Qnh^]|Ee$:+2^bGkA~<|gMG5$');
define('SECURE_AUTH_KEY',  'p|Y-bI?KXVDl`|B(Y#OfeQlG341-:da$7$p3>YS8,/vZ.a63z=Q%+7L-WRis*Xix');
define('LOGGED_IN_KEY',    'BAg;liG{QXw8<D^ Ov.3UWBpU[5mwJ](IbS#OLT4Z-7Cu<(+J+nNiSQ|+ga~0?pl');
define('NONCE_KEY',        'b!m/hdCw2l(.<,vu`o<?g{<HN>~r3~EJveUt)==>(Vb;=!>:Z;p9+z^[>*;6d#AQ');
define('AUTH_SALT',        '6$U@R<+K$@%M]?D9VY)x180z&he{s+S3c8$CL>{@CM>^X*p,D$i-kGeEl(&$2.1r');
define('SECURE_AUTH_SALT', 'Ka(%6G+4*g0CE?cD,JS;8IhL#8_E5mccg:)6PVLc> JP46hH=&B,V:]W0<7D]Sf^');
define('LOGGED_IN_SALT',   'PsN$O`KBjg!/;{Db(!z|g=H^7ysjNI+^wK~ r7NV_+k6pUM_)H]$+wb`-B<]g]8C');
define('NONCE_SALT',       'D`IhC%Fe)CZE^o%4ma7}SvH~:M;O1/w>G+N5HSk&tO/N$,Mxe>%<ggG3Xqj2_uSd');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
