<?php
/**
 * GalleryController class file
 *
 * @author Sebastian Krein <sebastian@itstrategen.de>
 */

namespace frontend\controllers;

/**
 * Class GalleryController
 *
 * @package frontend\controllers
 */
class GalleryController extends Controller
{
    public $layout = 'gallery';

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}