<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'myMultiSite1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V+1TinpR0g?B4Wt&Bctg0eB>B10$nl{5G{uaiXAIZX9nb7/N1XS]c]vTt`cDMwi~' );
define( 'SECURE_AUTH_KEY',  '):XJEm8-m);TlEsn{&nhMr!LWV!>#vj5<QZOfj3A2XDu;Mj9$}z!!|t)Nj>XYL@M' );
define( 'LOGGED_IN_KEY',    '4oTA:Se=ZagY,2{^dsxRC]kN_3cva4^jD0W[bqD*xMcH^:^q6LS{5<1kdp!i]b[S' );
define( 'NONCE_KEY',        '^+aG?V~6hz_~m%edcSLGwLK&sJ]F%l;_H4lJBb~)S2T`5HHw#8bW83b mw(uj3-M' );
define( 'AUTH_SALT',        '^XG?>+|b%[%A1A<~LTZ=3UQWwaxxr8FUH0WC!yUDE6h&|n{!}D3EekBXE >fgf|!' );
define( 'SECURE_AUTH_SALT', '@GER`kpx@la[qG%mN]BB&o_<OFgtQ,IYlt1,m~3WotkS>=>Jg75E|6eI_G7YW.F{' );
define( 'LOGGED_IN_SALT',   'aU;&W:gMX@(]K_dmyZft>E{<jE7xN*O|%g/.%KcYq*YHN,}@viRT>ve%o4SR;%*R' );
define( 'NONCE_SALT',       'As#|Bd#cg4P?dDwBU=!u9[|`hM?MhS+8{H4bAeQ[=N{ sL}_#XY5fvL[n#?oe6[d' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define ('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/myMultiSite1/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
