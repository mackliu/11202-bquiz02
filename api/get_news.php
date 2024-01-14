<?php include_once "db.php";
//取得指定id的文章
$news=$News->find($_GET['id']);

//顯示文章標題
echo "<span style='font-weight:bolder'>".$news['title']."</span>";
echo "<br>";

//利用nl2br()函式把文章的斷行加上<br>
echo nl2br($news['news']);