<?php

use lithium\core\Environment;

Environment::is(function($request) {
    if ($request->env('HTTP_HOST') == 'voicecloudweb') {
        return 'development';
    }
    return 'production';
});

?>
