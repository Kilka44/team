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
 * * Настройки базы данных
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
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.4' );

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
define( 'AUTH_KEY',         '+9AzX 2NF0!_TFtqS3bEvLqk]2MRgl=@)D<)m4k8hW1Z<gW.p~=(jE30]&r{%,Z9' );
define( 'SECURE_AUTH_KEY',  ':D%oOwbAqQVNX^va_dXZO#7P(;i{3Z|= eYBnq{.^.~^;%n}HtHXbNo=-J|$ U{.' );
define( 'LOGGED_IN_KEY',    'kg0A5%mFV g.y2]@=Q@V){v4&OCljfRnls yMLx:Vo5oK2&rk$V9D<Qpqg<mN&Jx' );
define( 'NONCE_KEY',        'G6%!z@y&A/qnRYs8-Ms<T)k2sVY*zNK`<B1BJiR)4Rtob-2`:.]>xY.b[_*R?=K)' );
define( 'AUTH_SALT',        ',ug=2S!D0juL&DA?kR m)DbN$r%LELn]nizZ>U_Q|qq>YgP6i{m@2vHCr=m$;vT(' );
define( 'SECURE_AUTH_SALT', 'EzZ1*S=X# v3:GktN?X!wb%@_Yv5Zz9Bci3h`9,0GZRNZ1+By(}7.zT<$nh%jg:z' );
define( 'LOGGED_IN_SALT',   'j.jC!1Iynf`4;}@fYT(J+L+8K0B$?z)uu]-*a!Mn^qB*/| loF`d>,av@YIw(9t&' );
define( 'NONCE_SALT',       '[_V?elCM)?DJt`D5kahe;Us8>)KtQQ ]31yFY)f=C].4|Mmt#q5Tf9=WH- +i>|B' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
