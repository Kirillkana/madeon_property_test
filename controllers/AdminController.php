<?php

namespace app\controllers;

use app\models\Author;
use app\models\Books;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model_books = Books::find()->all();
        $model_author =  Author::find()->all();

        return $this->render('index', compact('model_books', 'model_author'));
    }


}
