<?php

use JSONSchemaFaker\FakeJsons;

require dirname(__DIR__) . '/vendor/autoload.php';

$sourceDir = dirname(__DIR__) . '/schema/semantic';
$distDir = dirname(__DIR__) . '/fake/semantic';
$schemaUri = 'https://github.com/_vendor_/_package_/tree/master/schema/semantic';

(new FakeJsons)($sourceDir, $distDir, $schemaUri);

$sourceDir = dirname(__DIR__) . '/schema/rel';
$distDir = dirname(__DIR__) . '/fake/rel';
$schemaUri = 'https://github.com/_vendor_/_package_/tree/master/schema/rel';

(new FakeJsons)($sourceDir, $distDir, $schemaUri);
