<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'itechjoc_wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'itechjoc_lana' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', 'lana321' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&IIr?(1Sx42r$4=>B/_IBC$U5#ZE3ulF*CC=8=PX%xtY&`%9TU- p;0~wW,)_(Y6' );
define( 'SECURE_AUTH_KEY',  'zF:EQr+Luc>b4w7GO v9g%T= dq~lU5C3x?0_nPrREgexsf[~BS*86,Gs%W%Q%CC' );
define( 'LOGGED_IN_KEY',    'QbJU{OWrkgj<l=^O`l>;Z3im_1f}#_hf{euNzdg,7*=ZGRiRwvRUI~g.LSq/Wpd6' );
define( 'NONCE_KEY',        'P~X=O|sCTR[q)sDAZRpA~3If9df+zA1N$4W?Nk{H3uDrqbpDRNkwvEh i6|RFu@K' );
define( 'AUTH_SALT',        'HFd*ic9p?I;|x&z+5*Hsab8HS1tC<Y4AzTOoJw=bE/uPKRP9MWYp<M $TL9~qGny' );
define( 'SECURE_AUTH_SALT', 'XV:_N.@#>!d#f)<7i=c#Wq>/$~Y<vxj<e2q},np}X-C&o7NwLv[^;1VAQBQl=NTN' );
define( 'LOGGED_IN_SALT',   'c<n^KQSEv|}+&=0],&w@%;c_X4ie{} (mcwGgG<J;&l;!j_/*tcW27Ff&ZA5riPx' );
define( 'NONCE_SALT',       'oDjsMp3U=twO*=6,.J9;45u5!<&PvbZ~/5L:GZ9Sb9_,K %9b}ad>zcyH=-63YU|' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
