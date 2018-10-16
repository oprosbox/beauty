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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'beauty');

/** Имя пользователя MySQL */
define('DB_USER', 'beauty');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'gorXxwY1UcOhYkgd');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tc!TC:u^)oCF>L<i_j?)9Is47fGusW$B9o/c4>r<(|yT!9d*CpBW{/(v+[Yze6$6');
define('SECURE_AUTH_KEY',  'SxV#uJTue?lD~:E.0_?fg%ePY9Q8U[$+,jRYj b`n{<x4s`QPfqu-4ynC^QQjd}h');
define('LOGGED_IN_KEY',    'D+_XV,MrKl^oRo/2Hv%!86^m,MIseiG&lQ8g46Y[|mcy3p*L6]1.}.SwI=Kg-7~/');
define('NONCE_KEY',        'XH[c-qr9ZTSnD65l]&91aQAAlj2*]t7Aux}2J+Yz>=?Fb%BMp2 1fo*%Hr=36l5`');
define('AUTH_SALT',        '%prI`1g&ulXOPOY)6k#bO1#A>SVCN/ v(TG9hkA!JO(t@rKp(AiADfnLYTaPPrf_');
define('SECURE_AUTH_SALT', 'F*W@!IXH?`!0D@<m.z&5hWDclNpMjK #t7s`+YZbqP#](?YPnJk-<.v{gyz}|zwD');
define('LOGGED_IN_SALT',   '4u+T?b;8Fz)_@x@r-Yh-BwF6sL?*A^S A/%bOl;0<2XSh+:]Qn]N,7 @1]_oHdB3');
define('NONCE_SALT',       'Fk`|$;O@}Pp<<bc`i1C4GZ{&-|SGH?.klz/c0QA+M+14lLBzVD4!)JnDTG,_mlxZ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
