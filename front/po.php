<style>
    .type-item{
        display: block;
        margin:3px 6px;
    }
    .types,.news-list{
        display: inline-block;
        vertical-align: top;
    }
    .news-list{
        width:600px;
    }
</style>
<div class="nav">目前位置:首頁 > 分類網誌 > <span class="type">健康新知</span></div>

<fieldset class='types'>
    <legend>分類網誌</legend>
<a class='type-item' data-id="1">健康新知</a>
<a class='type-item' data-id="2">菸害防治</a>
<a class='type-item' data-id="3">癌症防治</a>
<a class='type-item' data-id="4">慢性病防治</a>
</fieldset>
<fieldset class='news-list'>
    <legend>文章列表</legend>
    <div class="list-items" style="display:none">
        
    </div>
    <div class="article" ></div>
</fieldset>

<script>
getList(1)    
    $(".type-item").on('click',function(){
        $(".type").text($(this).text())
        let type=$(this).data('id')
        getList(type)

    })
function getList(type){
    $.get("./api/get_list.php",{type},(list)=>{
        $(".list-items").html(list)
        $(".article,.list-items").toggle();
    })
}
function getNews(id){
    $.get("./api/get_news.php",{id},(news)=>{
        $(".article").html(news)
        $(".article,.list-items").toggle();
    })
}
</script>

