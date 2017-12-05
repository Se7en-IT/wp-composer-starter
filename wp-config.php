<?php

require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . getenv('WP_URL'));
define('WP_CONTENT_URL', WP_HOME .'/wp-content');

define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', getenv('DB_COLLATE'));
$table_prefix = getenv('DB_PREFIX');

define('AUTH_KEY',         'T~?Oq#bjZ1..A&,w(@&|:qr85|+<8zd]ry*dIPn4`Hf?c!:q*|5D]~S5q;g@QnF`');
define('SECURE_AUTH_KEY',  '6F#|5X)8_-Yc:+D%n).s|#y1K9*EwrNXsuL7d%:2fSS1<t]ewg|s9?3a#^W?9T!I');
define('LOGGED_IN_KEY',    'AwiA)h_fI{1^Rf W8[sD,F<d>+&Imc-^D`E%5G8b[),y%GmH!m,?LR<N5T,ET{Y?');
define('NONCE_KEY',        'k+oHZK]a3|FNk)0sJ|W?v@VOm`*0oF|-K(P0lyL?aCr8OX>aXuf^G1h0a.Rq!-s.');
define('AUTH_SALT',        'fNJQ|dZ-+NOF*N9KKH&s7Zkpl/-|`TuD^ca$>l|?CqM5L)?,(.55H#1T2Yd9P^lD');
define('SECURE_AUTH_SALT', 'Bx#[Cc](TGj^)lcWf}pt@fubQwb{MX0O|2%>W79t/xv.Rc_+4?ww#Obh6r9{Bm71');
define('LOGGED_IN_SALT',   'G[0PvS]rH%)}HM5$ob0>9=_Mf}-)Ml*5RRon7-Z^d MahIAMH6@l!~Xmfq^@>Nc$');
define('NONCE_SALT',       'G=N1&/AK(A<vubz@Y:H{ry+WzuaxDs[3O1CSxTN)6DfQsFnUg+u+@9 G Z}ix)^7');


define('WP_DEBUG', false);
define('WP_POST_REVISIONS', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__) . '/wp');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
