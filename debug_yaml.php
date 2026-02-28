<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

$directory = new RecursiveDirectoryIterator('config');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.yaml$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $file) {
    echo "Checking " . $file[0] . "... ";
    try {
        Yaml::parseFile($file[0]);
        echo "OK\n";
    } catch (ParseException $e) {
        echo "ERROR: " . $e->getMessage() . "\n";
    } catch (\Throwable $t) {
        echo "ERROR: " . $t->getMessage() . "\n";
    }
}
