<?php
/*
|--------------------------------------------------------------------------
| PIMF bootstrap
|--------------------------------------------------------------------------
*/

$root = dirname(dirname(__FILE__));


require_once $root.'/pimf-framework/config.core.php';
require_once $root.'/app/config.app.php';

require_once $root.'/pimf-framework/autoload.core.php';
require_once $root.'/app/autoload.app.php';

require_once $root.'/pimf-framework/utils.php';

Pimf_Application::bootstrap($config, $_SERVER);
