<?php

// Set the path to your patchwork application directory:
define('PATCHWORK_BOOTPATH', './cache');

// Set the path to patchwork's bootstrapper.php file:
$a = './vendor/patchwork/bootstrapper.php';


$a = include file_exists(PATCHWORK_BOOTPATH . '/.patchwork.php')
	? PATCHWORK_BOOTPATH . '/.patchwork.php' : $a;
$a || die("Failed inclusion of patchwork's bootstrapper.php in " . __FILE__);
