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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'prd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JoZ;R,H<rD iclzJHcG<J4;%Uxcg$>&-:/1i-,~Nfr+Q631P[Wo*oVeqT5JCYN#f');
define('SECURE_AUTH_KEY',  'N20=nT:@DLH=a,-Lm[W>*920*Y*@TBlWG*}uyl*)R-{5-V;AhS&Qac^fPIm]+O/<');
define('LOGGED_IN_KEY',    'qh(sP1qS&zVM$E1Vb{]!zU^_7o|s^k(+>|U4CgS*_y.(vo0D$|&@;oD*&sbu)TXo');
define('NONCE_KEY',        'V R<wE=nYV&1!v;J_eyl@N32L]Sf|NDP@q([!)2iN##K93,&iPrguS+m8P wi+o&');
define('AUTH_SALT',        'SHohMhP<W&|(7f5!6NxUH`lt^1G?jv1#]SY`#T`5L8F+kBTsc^DC68t<qm*,:.PQ');
define('SECURE_AUTH_SALT', '.o-(W)s9+~s;a8V(fATSO72loQ <Q1!?3FT;U@;U(q=|^sf/z@i5ND4U!~hZ]hv[');
define('LOGGED_IN_SALT',   'S#$8q2>LoV}<{IGmi%(+l&YRcy|M7X .T=KL3]{o$&V/nVy$rK]LPK>*=4b1yNNr');
define('NONCE_SALT',       ';!m,}L!c$$vnLZ:B%=~fLG&xbLF={7PM#Ywf6Zr,XFNniRWWp{u;7GtO9AV)1=^3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'rpd_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
