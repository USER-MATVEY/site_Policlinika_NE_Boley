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
define( 'DB_NAME', 'policlinica' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin-policlinica' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'H.kcf~[Xunxzc0:_g.lU%B.qzT$Mk-]qDD;^+USx:;chx$3dod<Y`RNazbug0Xj;' );
define( 'SECURE_AUTH_KEY',  '63iH<vDvP,0~<6`1A[V`pjGb=bkD7~:3YrUjfbHzrZH<ou2IEkJ@{1?2FDq,%Wn;' );
define( 'LOGGED_IN_KEY',    'OdkNXSIl,4:B(&=<8+v;^cA;HSmuU9s@m}ZfJRyfOH(_nr}]iLCjS@bvX*o!^@`k' );
define( 'NONCE_KEY',        't2WuGq&*aKBIl.3-8NEsNf-jw4wdYz6^?G,A!?/$^8+ !pTjC@jiGO(p7?KkG%er' );
define( 'AUTH_SALT',        'f%Im{^/g[t`hqB[Zz26|6lD^n`sZBAzPIP,AOwi!LA4%01; `3|6Y7,`n_}L4W)e' );
define( 'SECURE_AUTH_SALT', 'U/GC9[WrS&|Ucm+mfDxtI[}>h1D%:(D>E6.HDRb~cp~qA0ZK#f)y02EROjHFkcut' );
define( 'LOGGED_IN_SALT',   's7E%f%+k84pe@4/>g8;u;L5CvjLD;{%U#zO}$#o?L$$}c?KSpB}2QzmFTGqC-L.e' );
define( 'NONCE_SALT',       'SvxQl[ko<I:[p+Q~gg yxb~0}Q1U97{Q!<*&DqAX+A}Cw4PL?O<5LOH=+}Jy@+fr' );

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
