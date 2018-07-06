<?php

namespace frontend\models;

/**
 * Class Navigation
 *
 * @package frontend\models
 *
 * The followings are the available model relations:
 * @property Navigation   $parent   the parent navigation element
 * @property Navigation[] $children the child navigation elements
 */
class Navigation extends \common\models\Navigation
{
    /**
     * Gets the relative route to this category.
     *
     * @return string the category route
     */
    public function getCategoryRoute()
    {
        $elements = [$this->title];
        if (isset($this->parent)) {
            array_unshift($elements, $this->parent->title);
        }

        return implode('/', $elements);
    }
}