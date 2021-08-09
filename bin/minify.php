<?php

require __DIR__ . "/../vendor/autoload.php";

use MatthiasMullie\Minify;

// JS
$minifier = new Minify\JS();

$pathJsIn = __DIR__ . "/../src/js/";
$pathJSOut = __DIR__ . "/../src/";

$minifier->add($pathJsIn . "jquery-3.6.0.min.js");
$minifier->add($pathJsIn . "cucumber.js");
$minifier->add($pathJsIn . "chai.min.js");
$minifier->add($pathJsIn . "browser-example.js");

$minifier->minify($pathJSOut . "all.js");
exit(0);
