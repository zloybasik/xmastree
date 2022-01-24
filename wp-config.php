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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'miscre2g_xmastre' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'miscre2g_xmastre' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '&Z4IILio' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '_L]Yfa@{ q_1*=5XLyp&*fQ.Iw&UH]NM#y^ntWvseOB1p+pOj6fQ?Hy:RNmc]}3+' );
define( 'SECURE_AUTH_KEY',  '3K-v5@:p/D,QYDAEZdt`W$k|61=$]+bhL:r<._]&If<lS|3| b[@Flj[-<g7C0Yu' );
define( 'LOGGED_IN_KEY',    '_oXZ1j8fb3}`UH+H3Y2b*Zuz-KL&n&5bH$d-Y A#/+$V<whQ~1bleMWc1$G/?_D6' );
define( 'NONCE_KEY',        'Ujx|Q[dGz-RrQGk`K!u<kgwe[{4p@CotcSX4#FaQz5MhomqH|)=y_-yBuD?)7^_j' );
define( 'AUTH_SALT',        '1,a7NDm8XGm~9F>bp|kK@s4d2FjnV&X46h}T;($v}3,OzX*sUB%g8qaWagb(Y$o&' );
define( 'SECURE_AUTH_SALT', '?zd*bnm%9M8@r:a18BTGpndN=%5Tk5M>{cnT @#${p)VgF`D0@eG#xeeO$RvdWux' );
define( 'LOGGED_IN_SALT',   '`K#Fo#F R+udQq,X-egP2g,?YmE_4)_9eFSW ~N{Njp~2134ym7jTR@pN`(d{<Ho' );
define( 'NONCE_SALT',       '*EJgXj>m>yz&(1~ImLG6 5@FggoP/U?Y~b;<klFk&Dk:24XNWX0Z(t4Us=t5{:*a' );

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
