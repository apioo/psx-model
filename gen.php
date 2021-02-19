<?php

$specs = [
    'ActivityStream' => 'activity_stream.json',
    'AsyncAPI' => 'asyncapi.json',
    'Atom' => 'atom.json',
    'Common' => 'common.json',
    'OpenAPI' => 'openapi.json',
    'OpenRPC' => 'openrpc.json',
    'Rss' => 'rss.json',
    'SchemaOrg' => 'schema_org.json',
];

foreach ($specs as $name => $spec) {
    $cmd = sprintf('php vendor/psx/schema/bin/schema schema:parse spec/%s src/%s --format=php --config=%s', $spec, $name, escapeshellarg('namespace=PSX\\Model\\' . $name . '&mapping[openapi]=PSX\\Model\\OpenAPI'));

    echo 'Generate ' . $spec . "\n";
    echo '> ' . $cmd . "\n";

    shell_exec($cmd);
}

