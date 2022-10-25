<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello!');

$output = $bessie->say();
$output = $bessie->setTongue('U');
echo $output;

echo $bessie;