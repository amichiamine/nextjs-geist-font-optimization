<?php
// Configuration de l'application SGC_LMS

$config = [
    'app' => [
        'name' => 'SGC_LMS',
        'version' => '1.0.0',
        'single_tenant' => true,
    ],
    'database' => [
        'type' => 'sqlite',
        'path' => 'data/database.sqlite',
    ],
];

return $config;
?>
