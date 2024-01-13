<?php
include_once "db.php";
$user=$User->find(['email'=>$_POST['email']]);
if(empty($user)){
    echo "查無此資料";
}else{
    echo "您的密碼為：".$user['pw'];
}