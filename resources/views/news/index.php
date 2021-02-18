<?php
echo '<h1 style="text-align: center">Категории новостей</h1>';

foreach ($categoryNews as $key => $news) {
        echo $news . " &nbsp;<a href='".route('news.showCategoryNews', ['id' => $key, 'keyNews' => $key])."'>Перейти</a><br>";

}




    //print_r($news);

    /*foreach ($news as $new) {
        ".route('news.show', ['id'=>$key])."
    $news. "&nbsp;
    }*/


