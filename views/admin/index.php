<?php
/* @var $this yii\web\View */

use app\models\Author;
use app\models\Books;

/* @var $model_books Books*/
/* @var $model_author Author*/
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

<h2>Данные о авторах</h2>
<div class="top-line-info">
    <h3 >Имя</h3>
    <h3>Общее кол-во книг</h3>
</div>
<?
$total_author_book = 0;
foreach ($model_author as $author){
    $total_author_book = 0;
    foreach ($model_books as $book){
        if ($book->id_author == $author->id){
            $total_author_book += $book->count;
        }
    }?>
    <div class="author-info">
        <h4 ><?=$author->name?></h4>
        <h4 ><?=$total_author_book?></h4>
    </div>
<?}?>
