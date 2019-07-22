<?php
/**
 * Controller class file
 *
 * @author Sebastian Krein
 */

namespace frontend\controllers;

use frontend\models\Navigation;
use Yii;

/**
 * Class Controller
 *
 * @package frontend\controllers
 */
abstract class Controller extends \common\controllers\Controller
{
    public $layout = 'main';
    /**
     * @var array main menu
     * @access private
     */
    private $_menu = [];

    public function init()
    {
        parent::init();
        $this->initMenu();
    }

    /**
     * @return array
     */
    public function getMenu()
    {
        return $this->_menu;
    }

    /**
     * Setup main navigation
     *
     * @return void
     * @access private
     */
    private function initMenu()
    {
        $parentNavigationElements = Navigation::findAll(['parent_id' => null]);
        foreach ($parentNavigationElements as $parentNavigationElement) {
            $item = [
                'label' => $parentLabel = Yii::t('app', $parentNavigationElement->title)
            ];

            /** @var Navigation $childNavigationElement */
            foreach ($parentNavigationElement->children as $childNavigationElement) {
                $item['items'][] = [
                    'label'  => Yii::t('app', $childNavigationElement->title),
                    'url'    => '/' . $childNavigationElement->getCategoryRoute(),
                    'active' => $this->checkActiveStateControllerId($parentLabel)
                ];
            }

            array_push($this->_menu, $item);
        }
    }

    /**
     * Check whether current active controller matches given controller id.
     *
     * @param string|array $controllerId
     *
     * @return bool
     * @access private
     */
    private function checkActiveStateControllerId($controllerId)
    {
        $controllerIds = (array) $controllerId;
        foreach ($controllerIds as $controllerId) {

            if ($this->id == $controllerId) {
                return true;
            }
        }

        return false;
    }
}