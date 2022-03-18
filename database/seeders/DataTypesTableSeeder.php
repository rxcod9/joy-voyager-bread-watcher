<?php

namespace Joy\VoyagerBreadWatcher\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'watchers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'watchers',
                'display_name_singular' => __('joy-voyager-bread-watcher::seeders.data_types.watcher.singular'),
                'display_name_plural'   => __('joy-voyager-bread-watcher::seeders.data_types.watcher.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadWatcher\\Models\\Watcher',
                // 'policy_name'           => 'Joy\\VoyagerBreadWatcher\\Policies\\WatcherPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadWatcher\\Http\\Controllers\\VoyagerBreadWatcherController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
