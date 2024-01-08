<fieldset>
    <legend>目前位置:首頁 > 最新文章區</legend>
    <table style="width:95%;margin:auto">
        <tr>
            <th width="30%">標題</th>
            <th width="50%">內容</th>
            <th></th>
        </tr>
        <?php 
        $total=$News->count(['sh'=>1]);
        $div=5;
        $pages=ceil($total/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;

        $rows=$News->all(['sh'=>1]," limit $start,$div");
        foreach($rows as $row){
        ?>
        <tr>
            <td><?=$row['title'];?></td>
            <td><?=mb_substr($row['news'],0,25);?>...</td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div>
    <?php
    if(($now-1)>0){
        $prev=$now-1;
        echo "<a href='?do=news&p=$prev'> < </a>";
    }
    for($i=1;$i<=$pages;$i++){
        $fontsize=($now==$i)?"font-size:20px":"font-size:16px";
        echo "<a href='?do=news&p=$i' style='$fontsize'> $i </a>";
    }
    if(($now+1)<=$pages){
        $next=$now+1;
        echo "<a href='?do=news&p=$next'> > </a>";
    }
    ?>
    </div>
</fieldset>