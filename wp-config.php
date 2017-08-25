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
define('DB_NAME', 'verekon');

/** Имя пользователя MySQL */
define('DB_USER', 'verekon');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '21011');

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
define('AUTH_KEY',         '~~9B+Q8m9f$AbU!@-V`W)(gb&U1H+ br|538K;TsS%;&9Dq:e%6$%pm^C2{/OYu0');
define('SECURE_AUTH_KEY',  'ah-:8WC9bDj)$93 Q*FA]?~@1,ORF7nH=PO5xdFMCg~w8`>!uQzFKDfigGzgaQaS');
define('LOGGED_IN_KEY',    '7)A1|lv7.vb+hf{V$1Gf_P`TzS0lfm:IYMqVqiYLi/{KpGPgbU[6Um*-^|T;}3f-');
define('NONCE_KEY',        '<Epdd2u1X?Wo+}2Fwp}O_Mk}I(Tpj:5^}Fj_ro:DM~8Fbqu2I@m)ZvK~J]Qmh4rD');
define('AUTH_SALT',        'BE|/;|ksWMQTkMNjOLJqa/UG2WFU c~0|q?k#=,kc~fHDGEtk,,$k_Y[2LG>NL}2');
define('SECURE_AUTH_SALT', '%wDs`=VmGJ} C3^u69;<}],~[+/5fcCn4XDzjJ@J6iGGN.o$dDD-qfG09hdi&e)-');
define('LOGGED_IN_SALT',   '^a;<kWX:1j*Ec`_hB*[Iap{^.g Dgi-Y&{,{L)mf_`.xi@tp?Qo]zd<]y(gk`)Q`');
define('NONCE_SALT',       '3lh!/Usk-#_U^Xz>%_D>`wl4vmSl,PioY eGb/|(w^ W4c!81&-]/ZeSdrfe.E2$');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'vr_';

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
