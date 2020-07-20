<?php

$specs = [
    'ActivityStream' => 'activity_stream.json',
    'Atom' => 'atom.json',
    'Common' => 'common.json',
    'OpenAPI' => 'openapi.json',
    'Rss' => 'rss.json',
    'SchemaOrg' => 'schema_org.json',
];

foreach ($specs as $name => $spec) {
    $cmd = sprintf('php vendor/psx/schema/bin/schema schema:parse spec/%s src/%s --format=php --config=%s', $spec, $name, escapeshellarg('PSX\\Model\\' . $name));

    echo 'Generate ' . $spec . "\n";
    echo '> ' . $cmd . "\n";

    shell_exec($cmd);
}

