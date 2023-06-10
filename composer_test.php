<?php
require __DIR__ . '/vendor/autoload.php'; // load Composer's autoloader
use Cocur\Slugify\Slugify; // use the library 

$slugify = new Slugify();

echo $slugify->slugify('first post title, with some special characters!!!');
