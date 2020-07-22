<?php


/* @var $model_books Books*/
/* @var $model_author Author*/

$this->title = 'My Yii Application';
?>
<h2>Данные о книгах</h2>
<div class="top-line-info">
    <h3 class="h3-name-book">Название</h3>
    <h3 class="h3-author-book">Автор</h3>
    <h3>Кол-во книг</h3>
</div>
<?
foreach ($model_books as $book){
    foreach ($model_author as $author){
        if ($book->id_author == $author->id){?>
            <div class="book-info">
                <h4 ><?=$book->name?></h4>
                <h4 ><?=$author->name?></h4>
                <h4 ><?=$book->count?></h4>
            </div>
        <?}
    }
}?>




