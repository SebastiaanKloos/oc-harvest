<?php namespace Codecycler\Harvest\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * HarvestManager Form Widget
 */
class HarvestManager extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'codecycler_harvest_harvest_manager';

    protected $taskKey = null;

    protected $taskName = null;

    /**
     * @inheritDoc
     */
    public function init()
    {
        $this->fillFromConfig([
            'taskKey',
            'taskName',
        ]);
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('harvestmanager');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;

        $path = explode('\\', get_class($this->model));

        $this->vars['task_id'] = array_pop($path) . '-' . $this->model->{$this->taskKey};
        $this->vars['task_name'] = $this->model->{$this->taskName};
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/harvestmanager.css', 'Codecycler.Harvest');
        $this->addJs('js/harvestmanager.js', 'Codecycler.Harvest');
    }

    /**
     * @inheritDoc
     */
     public function getSaveValue($value)
     {
          return \Backend\Classes\FormField::NO_SAVE_DATA;
     }
}
