<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\weui;

use yii\helpers\Json;

trait WeuiWidgetTrait
{
    /**
     * Initializes the widget.
     * This method will register the bootstrap asset bundle. If you override this method,
     * make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        $view = $this->getView();
        WeuiAsset::register($view);
    }

    /**
     * @return \yii\web\View the view object that can be used to render views or view files.
     * @see \yii\base\Widget::getView()
     */
    abstract function getView();
}