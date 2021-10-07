<?php

/**
 * @var Throwable $th
 */

use Ebcms\App;
use Ebcms\Config;

$th = $params;

App::getInstance()->execute(function (
    Config $config
) use ($th) {
    if ($config->get('whoops.show@ebcms/whoops', true)) {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        throw $th;
    }
});
