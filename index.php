<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 11/07/2017
 * Time: 16:29
 */
//comment
define('INCLUDE_DIR', dirname(__FILE__) . '/html/');
$rules = array(
    //
    // Home Page
    //
    'home' => "/",
    'index' => "/"
);
$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri,
        ''
        , $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);
foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        //$_SESSION['lastcalledaction'] = $action;
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}
// nothing is found so handle the 404 error
include(INCLUDE_DIR . 'home.php');
?>