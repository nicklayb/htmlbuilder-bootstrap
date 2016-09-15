<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Nicklayb\HtmlBuilder\Bootstrap\Input;

$b = new Input;
echo $b->make();
