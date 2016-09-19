<?php
define('DB_NAME', 'g4gmwp');
define('DB_USER', 'g4gmwp');
define('DB_PASSWORD', 'wannabesysadmin');
define('DB_HOST', 'db1.g4.gm.a8c.com');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'c~u;xd9v9)27_w2f@5~id+0&@B`^d}+$|ylqv?P5s)^;Uj^1pu8@rT *~<wk,.}Q');
define('SECURE_AUTH_KEY',  'MGq4|+z-Ahr`!{KW^VhgT.Gni,,fRWV.U`YaS3;5xh)1p9lh|xC7;bf@_,k;|Ime');
define('LOGGED_IN_KEY',    'C)w8($/`.+~3[;Nker( U/pc-Dr,3|4Ti#g~PGEmB8l UC,4`U}kb0v{W0.D>|G+');
define('NONCE_KEY',        'JwL#M*sbH]ag(E T)c# SOn8pMu9hU-,&M+4P]X5eeghcyee#0v@ E|M}7G7v00a');
define('AUTH_SALT',        '&-R=SOG]0Pm>xmp)kvKLIiG+M]+Z{*k[^d*d+|<.-d)#|QGKE<+;-1]}/?pun$oV');
define('SECURE_AUTH_SALT', '.[~.SQL{:BSG*rwP8)@8rZH`4{)-qjlZb`lS/HiI;l5QT1uylfw_-UpMUS~aOK^@');
define('LOGGED_IN_SALT',   'K/M&]35ZrL:_~kS1|+W~a?>{EYeJINaxqRraEkHvG/>S YTGorZ(=AAsdqp.8p+~');
define('NONCE_SALT',       's@t$,[3au#zK&3epU-nT+aH`{f1oC]4VZUg 3lCt#Zg;u@gG6i%wa O+j/TqY*N*');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
