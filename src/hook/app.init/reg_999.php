<?php

use Ebcms\App;
use Ebcms\Config;

App::getInstance()->execute(function (
    Config $config
) {
    if ($config->get('whoops.show@ebcms/whoops', true)) {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
});
