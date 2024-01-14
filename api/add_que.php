<?php include_once "db.php";

//判斷主題是否存在
if(isset($_POST['subject'])){
    
    //新增主題資料
    $Que->save(['text'=>$_POST['subject'],
                'subject_id'=>0,
                'vote'=>0]);

    //根據剛才新增的主題資料去找到主題的資料id                
    $subject_id=$Que->find(['text'=>$_POST['subject']])['id'];
    
    //或是使用max()找到最大的id
    //$subject_id=$Que->max('id');
}

//判斷選項是否存在
if(isset($_POST['option'])){

    //使用迴圈來巡訪 $_POST['option'] 陣列
    foreach($_POST['option'] as $option){

        //新增選項資料
        $Que->save(['text'=>$option,
                    'subject_id'=>$subject_id,
                    'vote'=>0]);
    }
}

//導回後台管理頁面
to("../back.php?do=que");