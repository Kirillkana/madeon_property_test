<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property int $count
 * @property int $id_author
 */
class ApiBooks extends Books
{
    public function fields()
    {
        return [
            // название поля совпадает с именем атрибута

            // название поля "email", атрибут "email_address"
            'name' => 'name',
            'author' => function () {
                $record = Author::find()->where(['id' => $this->id_author])->one();
                return $record->name;
            },
            // название поля "name", значение определяется callback-ом PHP

        ];
    }
}
