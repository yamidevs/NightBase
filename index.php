<?php

define('START_TIME', microtime(true));
define('DS', DIRECTORY_SEPARATOR);
define('EXT', ".php");
define('DEBUG', false);
define('BASE', __DIR__ . DS);
require 'core'.DS.'HandlerClass'.EXT;
$HandlerClass = new HandlerClass();
require BASE.'configuration'.DS.'Database'.EXT;
if (empty($_GET['p'])) {

    $_GET['p'] = $HandlerClass->_class['ParserClass']->getindex();
}
if (!file_exists("content/" . $_GET['p'] . EXT) || !preg_match('#^[a-zA-Z0-9]+$#', $_GET['p'])) {
  
    $_GET['p'] = $HandlerClass->_class['ParserClass']->geterreur();
}
ob_start();
require "content".DS. $_GET["p"] . EXT;
$content = ob_get_contents();
ob_end_clean();
include'template' . DS . 'layout.php';

if (DEBUG) {
    $temps = function() {
        echo '<br/>';
        echo 'Page géneree en ' . round(microtime(true) - START_TIME, 5) . ' secondes';
    };
    $temps();
}

?>
