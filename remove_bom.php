<?php
$file = __DIR__ . '/composer.lock';
$content = file_get_contents($file);
if (substr($content, 0, 3) === "\xEF\xBB\xBF") {
    $content = substr($content, 3);
    file_put_contents($file, $content);
    echo "BOM removed\n";
} else {
    echo "No BOM found\n";
}
