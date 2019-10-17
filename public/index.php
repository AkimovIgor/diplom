<?php
use school145\ErrorHandler;

require_once (dirname(__DIR__)).'./config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \school145\App();

?>