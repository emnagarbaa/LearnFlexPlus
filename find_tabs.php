<?php
$directory = new RecursiveDirectoryIterator('config');
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.yaml$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $file) {
    if (strpos(file_get_contents($file[0]), "\t") !== false) {
        echo "Found tab in: " . $file[0] . "\n";
    }
}
