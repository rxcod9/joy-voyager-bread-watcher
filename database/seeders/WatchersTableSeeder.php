<?php

namespace Joy\VoyagerBreadWatcher\Database\Seeders;

use Joy\VoyagerBreadWatcher\Models\Watcher;
use Illuminate\Database\Seeder;

class WatchersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Watcher::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Watcher::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Watcher ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Watcher Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
