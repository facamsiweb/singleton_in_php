<?php
/**
 * Created by PhpStorm.
 * User: jaime
 * Date: 21/08/17
 * Time: 17:27
 */

// PSR-0
spl_autoload_register(function($name) {
    $include = $name;

    if (strpos($name, "\\")) {
        $include = str_replace("\\", "/", $include);
    }

    include $include . ".php";
});