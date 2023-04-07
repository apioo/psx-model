<?php

$cmd = sprintf('php vendor/psx/schema/bin/schema schema:parse typeschema.json src --format=php --config=%s', escapeshellarg('namespace=PSX\\Model'));

echo 'Generated' . "\n";
echo '> ' . $cmd . "\n";

shell_exec($cmd);

