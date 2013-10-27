<?php
/*
|--------------------------------------------------------------------------
| PIMF Application gateway/runner
|--------------------------------------------------------------------------
*/
require_once 'app/bootstrap.app.php';

Pimf_Application::run($_GET, $_POST, $_COOKIE);

Pimf_Application::finish();