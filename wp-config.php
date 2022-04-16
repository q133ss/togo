<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'togo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NC$D;=[7wKO%wy|Y}%i(A]g^)R,il#ZDG~Ja<<@WK#8h[I=4n~4u|NUk3Inq54eM' );
define( 'SECURE_AUTH_KEY',  '0n1JF2xD<J4U;r$z~FxGBZZotbcBD^IX1V5iQ$o3(=mVr8)QcQ]F Wd^.p6vO!w%' );
define( 'LOGGED_IN_KEY',    't=v ;;,6a!Z[I.5L~DRo)z[{tVK%fA/q6B--?VCRk+p]XKNO)=P?,I:#:YTa[m&S' );
define( 'NONCE_KEY',        'DUOu1Fw(]gzQ=g6Rtav])PRuh`eh0.iPXwTzXfT5FqVkzP+H[>UBly^@Yj{$|(]T' );
define( 'AUTH_SALT',        'T#R`6a36>u{;8uVBiMT&E3iB0})]RCy&cuVL)L?jsojV{Ptx9.{wpz=>imHu.vOm' );
define( 'SECURE_AUTH_SALT', 'Jx;[QIQ/.]/oD|=j7^kUo/VG5]1>]xb-8:mU~j=Jo2wh`sAzbb:kdK!aP4S+Zy= ' );
define( 'LOGGED_IN_SALT',   '9Jk)&3*ltX]50.5]w.I[02$pI5dss(+J&0i;Gw*_!_vR|=TAy]v$l!bs-(YlT,^U' );
define( 'NONCE_SALT',       'tV9?r:9r0 Afc(s+pf$%Ph4Lu?;M6+!ZU@B95me)~HB{GravS`Vqg(_5$xp4O:TR' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
