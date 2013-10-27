<?php
/*
|--------------------------------------------------------------------------
| PIMF bootstrap
|--------------------------------------------------------------------------
*/

require_once 'pimf-framework/config.core.php';
require_once 'config.app.php';


require_once 'pimf-framework/autoload.core.php';
require_once 'autoload.app.php';

require_once 'pimf-framework/utils.php';

Pimf_Application::bootstrap($config, $_SERVER);
