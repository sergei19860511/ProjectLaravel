<?php
echo '<h1>'.$news.'</h1><br>';

foreach ($keyNews as $key => $news) {
    echo $key . " &nbsp;<a href='".route('news.showListNews', ['news' => $news])."'>Перейти</a><br>";
}
?>

<a href="<?=route('admin.news.index')?>">Админпанель</a>
