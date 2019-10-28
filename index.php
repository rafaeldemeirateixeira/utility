<?php

require_once 'vendor/autoload.php';

use \Src\Utility;

$utility = new Utility();

$encoding = $utility->checkCharset('Teste de charset de áêíõù');

var_dump($encoding);