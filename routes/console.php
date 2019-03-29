<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('iseed:voyager', function () {
    // Backup the content of DatabaseSeeder.php
    $fs = new \Illuminate\Filesystem\Filesystem();

    $databaseSeederPath = base_path() .
        config('iseed::config.path') . '/DatabaseSeeder.php';
    $content = $fs->get($databaseSeederPath);

    // Define the tables created by Voyager
    $voyager_tables = [
        'data_rows',
        'data_types',
        'menu_items',
        'menus',
        'permission_role',
        'permissions',
        'roles',
        'settings',
    ];

    $timestamps = [
        'created_at',
        'updated_at',
    ];

    // Call iseed and pass the tables defined above
    // --force is passed to replace the older seeders
    // --noindex is passed to facilitate merging multiple seeders
    Artisan::call('iseed', [
        'tables' => implode(',', $voyager_tables),
        '--force' => true,
        '--exclude' => implode(',', $timestamps),
        '--noindex' => true,
    ]);

    // Restore DatabaseSeeder.php
    $fs->put($databaseSeederPath, $content);
});