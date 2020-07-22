<?php

namespace app\controllers\api\v1;

use yii\rest\ActiveController;
use yii\web\Response;

class BookController extends ActiveController  //api/v1/books/list получение списка книг с именем автора
{
    public $modelClass = 'app\models\ApiBooks';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }

}


