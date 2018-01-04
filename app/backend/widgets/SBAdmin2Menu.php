<?php

namespace backend\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Menu;

/**
 * Class Menu
 *
 * Extends yii build in Menu to render additional icons in the main menu or each submenu.
 *
 * @package app\extensions\widgets
 * @author  Sebastian Krein <sebastian@itstrategen.de>
 */
class SBAdmin2Menu extends Menu
{
    /**
     * @var string the template used to render the body of a menu which is a icon.
     * In this template, the token `{iconTag}` will be replaced with the iconTag of the menu item.
     * This property will be overridden by the `iconTag` option set in individual menu items via [[items]].
     * In this template, the token `{icon}` will be replaced with the icon of the menu item.
     * This property will be overridden by the `icon` option set in individual menu items via [[items]].
     */
    public $iconTemplate = '<{iconTag} class="{icon}"></{iconTag}>';

    /**
     * @var string the tag name of the icon tags.
     */
    public $iconTag = 'i';

    /**
     * @var string the CSS class that will be assigned to the icon element in the main menu or each submenu.
     * Defaults to null, meaning no such CSS class will be assigned.
     */
    public $icon;

    /**
     * @var string the template used to render the body of a menu which is a link.
     * In this template, the token `{url}` will be replaced with the corresponding link URL;
     * `{label}` will be replaced with the link text.
     * `{icon}` will be replaced with the icon element.
     * `{collapse}` will be replaced with an arrow indicating weather this menu item is collapsed or not.
     *      - Note: (Only active on menu items which contains at least one submenu)
     * This property will be overridden by the `template` option set in individual menu items via [[items]].
     */
    public $linkTemplate = '<a href="{url}">{icon}{label}{collapse}</a>';

    /**
     * @var string the template used to render a list of sub-menus.
     * In this template, the token `{items}` will be replaced with the rendered sub-menu items.
     */
    public $submenuTemplate = "\n<ul class='nav {levelClass}'>\n{items}\n</ul>\n";

    /**
     * @var boolean whether to activate parent menu items when one of the corresponding child menu items is active.
     * The activated parent menu items will also have its CSS classes appended with [[activeCssClass]].
     */
    public $activateParents = true;

    /**
     * @var string the template to use for displaying the icon determining the collapse status of each menu containing
     * at least one submenu.
     */
    protected $collapseIconTemplate = '<span class="fa arrow"></span>';

    /**
     * @var string the template used for the additional CSS class we append to the `submenuTemplate`.
     * In this template, the token `{level}` will be replaced with the appropriate value in the configurable
     * array $depthToLevelMapper. You can config the array to return your own classes.
     */
    public $levelClassTemplate = 'nav-{level}-level';

    /**
     * @var array maps the level of the submenu to the appropriate value for the token `{level}` in the attribute
     * `levelClassTemplate`.
     */
    public $depthToLevelMapper = [
        'second',
        'third',
        'fourth',
        'fifth',
    ];

    /**
     * Gets the class name for the appropriate recursion depth.
     *
     * @param array $item  the current menu item to be rendered
     * @param int   $depth the current recursion depth
     *
     * @return string the class name or an empty string, if `depth` is not set in the array `depthToLevelMapper`
     */
    protected function getLevelClassFromDepth($item, $depth)
    {
        $levelClass         = '';
        $levelClassTemplate = ArrayHelper::getValue($item, 'levelClassTemplate', $this->levelClassTemplate);
        if (isset($this->depthToLevelMapper[$depth])) {
            $levelClass = strtr($levelClassTemplate, [
                '{level}' => $this->depthToLevelMapper[$depth],
            ]);
        }

        return $levelClass;
    }

    /**
     * Recursively renders the menu items (without the container tag).
     *
     * @param array $items the menu items to be rendered recursively
     * @param int   $depth the call stack number of recursive calls
     *
     * @return string the rendering result
     */
    protected function renderItems($items, $depth = 0)
    {
        $n     = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag     = ArrayHelper::remove($options, 'tag', 'li');
            $class   = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu            .= strtr($submenuTemplate, [
                    '{items}'      => $this->renderItems($item['items'], $depth + 1),
                    '{levelClass}' => $this->getLevelClassFromDepth($item, $depth),
                ]);
            }
            if ($tag === false) {
                $lines[] = $menu;
            } else {
                $lines[] = Html::tag($tag, $menu, $options);
            }
        }

        return implode("\n", $lines);
    }

    /**
     * Extends @see parent::renderItems() by adding functionality to rendering icon elements and additionaly, if this
     * menu item has at least one submenu, an arrow icon.
     * Note: Icons are only rendered if returned result of @see \yii\widgets\Menu::renderItem() contains the token
     * `{icon}`. Therefore this class overwrite the attribute $linkTemplate.
     *
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     *
     * @return string the rendering result
     */
    protected function renderItem($item)
    {
        $menuItem = parent::renderItem($item);
        if (isset($item['icon'])) {
            $iconTemplate = ArrayHelper::getValue($item, 'iconTemplate', $this->iconTemplate);

            $menuItem = strtr($menuItem, [
                '{icon}' => strtr($iconTemplate, [
                    '{icon}'    => $item['icon'],
                    '{iconTag}' => ArrayHelper::getValue($item, 'iconTag', $this->iconTag),
                ]),
            ]);
        } else {
            $menuItem = strtr($menuItem, [
                '{icon}' => '',
            ]);
        }

        return strtr($menuItem, [
            '{collapse}' => (empty($item['items'])) ? '' : $this->collapseIconTemplate,
        ]);
    }
}