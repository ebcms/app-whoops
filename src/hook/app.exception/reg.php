<?php

use Ebcms\App;
use Ebcms\Config;

App::getInstance()->execute(function (
    App $app,
    Config $config
) {
    if ($config->get('whoops.show@ebcms/whoops', true)) {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        throw $app->getException();
    }
});
