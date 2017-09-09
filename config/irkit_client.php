<?php
/**
 * Created by PhpStorm.
 * User: matsui
 * Date: 2017/09/09
 * Time: 20:57
 */

return (function () {
    $env = env('APP_ENV', 'production');
    $config_file = __DIR__.'/irkit_client.'.$env.'.json';

    if (file_exists($config_file)) {
        $result = json_decode(file_get_contents($config_file), true);
    } else {
        $result = [];
    }

    return $result;
})();