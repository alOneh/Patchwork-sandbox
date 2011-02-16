<?php

// Cache directory of your patchwork application:
define('PATCHWORK_BOOTPATH', './cache');

// Include patchwork's bootstrapper.php:
include './vendor/patchwork/bootstrapper.php';

// This point should never be reached
die("Failed inclusion of patchwork's bootstrapper.php in " . __FILE__);
