<?php namespace Codecycler\Harvest;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Harvest',
                'description' => 'Manage Harvest settings.',
                'category'    => 'Timemanagement',
                'icon'        => 'icon-clock-o',
                'class'       => 'Codecycler\Harvest\Models\Settings',
                'order'       => 500,
                'keywords'    => 'timemanager clock harvest',
                'permissions' => ['codecycler.harvest.access_settings'],
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Codecycler\Harvest\FormWidgets\HarvestManager' => 'harvest',
        ];
    }
}
