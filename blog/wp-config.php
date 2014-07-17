<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dmitriysmoll_adaswp');

/** Имя пользователя MySQL */
define('DB_USER', '033225004_adaswp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'TyGtJT67Cn');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-YU|/Z~PP83[`$=Xc@cn&qG7m6y62JQz=%_L:+|h3hll4X{|1)r3wqmVXwzppg]!');
define('SECURE_AUTH_KEY',  '_]qq+(~%|_+~$,aK(TG;93>lfh!H-3/d!dWIxz.oq%^w:r5q~jo6zQ@:MoFj3)uu');
define('LOGGED_IN_KEY',    'k*ap_i5/`gl13=Sc,6%=]ltb$$0p#t >!(hQk&w3ZC>:PC?YJ5a})m(W6WHY@{t8');
define('NONCE_KEY',        'jz2.cv^rK6i|+E9N9|d_-gMV1|-b7rWFO.9N}&SekH$_{|5}>+)9P`PJ`q+^~-`+');
define('AUTH_SALT',        '(;<bA3]3D_Yv0t_D]o?[ZZ)%Q[P qt:49=%9Dl~@G`9kfrG<Suw`%$WpcsF$Kq,f');
define('SECURE_AUTH_SALT', 'nk>y6SCv7/$n9-m3/mc<5)#E+0KQLT[;Uoh/(n7amZ[aO[)rW@4);gjYDLhm0)`i');
define('LOGGED_IN_SALT',   'MZ-[~i/#-5EB>paamqe60c3c%!;Kn!K1>LF^JNt1n0hi?*d.!;zy[RgeJ$_us>/A');
define('NONCE_SALT',       '[R+kn](zKe ,s7;t3I|<-|[e-VUJj>L-zD|R60!6``-[+<-<=#U[Fhvg*,F0zrtC');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
