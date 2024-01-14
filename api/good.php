<?php include_once "db.php";

//根據文章id找到文章資料
$news=$News->find($_POST['news']);

//判斷log資料表中是否有這筆資料
if($Log->count(['news'=>$_POST['news'],'acc'=>$_SESSION['user']])>0){
    //有的話就刪除這筆資料,並且讚數減1
    $Log->del(['news'=>$_POST['news'],'acc'=>$_SESSION['user']]);
    $news['good']--;
}else{
    //沒有的話就新增這筆資料,並且讚數加1
    $Log->save(['news'=>$_POST['news'],'acc'=>$_SESSION['user']]);
    $news['good']++;
}

//更新文章資料
$News->save($news);

?>