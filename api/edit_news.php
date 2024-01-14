<?php include_once 'db.php';

// 檢查是否有設定 $_POST['id']
if(isset($_POST['id'])){
    //使用迴圈來巡訪 $_POST['id'] 陣列
    foreach($_POST['id'] as $id){
        // 檢查是否有設定 $_POST['del'] 且 $id 在 $_POST['del'] 陣列中
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            // 呼叫 News 物件的 del() 方法刪除新聞
            $News->del($id);
        }else{
            // 取得指定id的新聞資料
            $news=$News->find($id);
            // 檢查是否有設定 $_POST['sh'] 且 $id 在 $_POST['sh'] 陣列中
            // 若是則將 $news['sh'] 設為 1，否則設為 0
            $news['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            // 呼叫 News 物件的 save() 方法儲存新聞資料
            $News->save($news);
        }
    }
}

// 導回後台管理頁面
to("../back.php?do=news");