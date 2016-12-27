<?php
include_once 'example.php';

$example = new example();

$files = ['file_one.xml', 'file_two.xml'];

$data = $example->getXML($files);

echo "<pre>";
foreach($data as $xml)

print_r($xml);