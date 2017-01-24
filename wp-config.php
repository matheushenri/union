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
define('DB_NAME', 'union');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'M4th3vsh3nr1');

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
define('AUTH_KEY',         ',@2=[%C/p*;-`Y~4Am2o{-I*FnWoL%{1}_4#,i426qkO;[tWSg3mk{~;4sS6~9A.');
define('SECURE_AUTH_KEY',  '9U%u%sysXBBm~zP@[}MHK1%j0n(tkRg|tE xi~xPQlKiy*O#xCwDDbyn/cD~/tm|');
define('LOGGED_IN_KEY',    '?qMT$|6RSl/t(2~j6r&tk|1GY);Y!t@&eus:Wn9L0/*Z+T 6C<$1<MZ]Dwr7=m>c');
define('NONCE_KEY',        ';#9,&o~Ev4U-ibyWz^lmikP@3/_0{:;T:xDgFUq1?bO?&(708{fS/,%q6%B0}lf5');
define('AUTH_SALT',        '1^(beMd ^.5XMAYa*F:@`j3P-kP?e0`g(2i@]Z.t)1?y]o0@/Tm)f77?-eo=LcSN');
define('SECURE_AUTH_SALT', ' ~b!]O-]:z:gTu*0MI}W:4O/pood~e)4Q&F[2oLk.Qe=H=!#gg`r nuK75oT`^{I');
define('LOGGED_IN_SALT',   '*SYcm1|Q>fZGF:+r%Tfub>J$q?hO-/y#{LuL(Mn^%>z1eI^ia=M*{~hE.0CWV~ih');
define('NONCE_SALT',       '+bw!|?%p@n|6^^V2ff&gHnV*+U7H)Q_@xB.PbFz,D!Ws8&~[b{s:=[>V9PDnfEG/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'un_';

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
define('WP_DEBUG', true);
define('FS_METHOD','direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
