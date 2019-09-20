<?php


namespace app\controllers;


use yii\web\Controller;

/**
 * Class SiteController
 *
 * @package      app\controllers
 * @author       Alex.Krupnik <krupnik_a@ukr.net>
 * @copyright (c), Thread
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDocs(){
        return $this->render('docindex.md');
    }

}