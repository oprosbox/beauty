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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'len');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'opros');

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
define('AUTH_KEY',         'CbmA,OQp7g7?w(BZxz8q(pFc`_5}Xf?Hi1tv2]2Hs]@lv]:mx?jlfZ&{L3K{2uNI');
define('SECURE_AUTH_KEY',  'rGvKcT,{T`TOe?&yj:o4$%*Pcyar.WB$SLzz!>Wl7Rjn*rEA?yW7bV7[TME33$=;');
define('LOGGED_IN_KEY',    'n0]l~J_UR2L0LQ5h1kANyvh1=rc~YRIn@vJbu=]3^hH^]zkj2.2~A1MDYYHZ`jD6');
define('NONCE_KEY',        'a.yfaKwp[L0=er(L7za~6L3|;C9CUC=4Y/;+0RKZda!2QP1wl8Uy$oJHcPx!*IX3');
define('AUTH_SALT',        'pe _2E(}dgjm@[%6&.>S?L+jFGnm@5,u`k;jU,C,UFFkE6VkGq&uoDdV1FElQ rO');
define('SECURE_AUTH_SALT', 'QBP*`w#ss>scZa7f[C=@#2e&7),7:c79T+r=3jz]W31YFHGce<O-,, (9AV8h_f2');
define('LOGGED_IN_SALT',   'e/UO{v7_`GoQ4g_Y;)&/c@6`A2ze``2td:v:X`YY[g<T>3]j&ApQ[<L^!Hv&(tGJ');
define('NONCE_SALT',       'd!)8hT&Rn|,og|Yq7GO&5ZcZlI@`loOlvD2siGS^:7^y=kcV5Nc+dQdVA$Bhd<Ru');

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
