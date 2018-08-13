<?php

require_once 'vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__))->load();
} catch (Exception $e) {
    throw new $e;
}

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/resources/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/resources/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'port' => 3306,
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'port' => 3306,
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'port' => 3306,
            'charset' => 'utf8',
        ],
    ],
];
