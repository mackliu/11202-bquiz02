<style>
    .tag{
        width:100px;
        padding:5px 10px;
        border:1px solid black;
        margin-left: -1px;
        border-radius: 5px 5px 0 0;
        text-align: center;
    }
    .tags{
        display: flex;
        margin-left:1px;
    }

    article section{
        border:1px solid black;
        min-height:400px;
        margin-top:-1px;
    }
    .active{
        border-bottom:1px solid white;
    }
</style>




<div class="tags">
    <div class='tag active'>健康新知</div>
    <div class='tag'>菸害防治</div>
    <div class='tag'>癌症防治</div>
    <div class='tag'>慢性病防治</div>
</div>
<article>
    <section>dfasdf</section>
    <section>aaaa</section>
    <section>bbb</section>
    <section>ccc</section>
</article>

<script>
   $(".tag").on('click',function(){
        $(".tag").removeClass('active')
        $(this).addClass('active')
   })
</script>