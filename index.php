<?php
/**
 * wechat php test
 */

//define your token
define("TOKEN", "weixin");
spl_autoload_extensions('.php');
spl_autoload_register('my_autoload');

function my_autoload($className)
{
    include_once './'.$className.'.class.php';
}

$wechatObj = new Callback();
$wechatObj->valid();
