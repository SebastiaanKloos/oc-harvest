<?php namespace Codecycler\Harvest;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {
        return [
            'Codecycler\Harvest\FormWidgets\HarvestManager' => 'harvest',
        ];
    }
}
