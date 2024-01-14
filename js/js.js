// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(news){
	$.post("./api/good.php",{news},()=>{
		
		//使用重整頁面的方式來更新按讚的結果
		location.reload();
/* 		//根據點擊的文字來決定動作
		switch($("#n"+news).text()){
			case "讚":
				//如果按下的字是"讚"，則替換成"收回讚"，並且讚數+1
				$("#n"+news).text("收回讚")
				$("#g"+news).text($("#g"+news).text()*1+1)
			break;
			case "收回讚":
				//如果按下的字是"收回讚"，則替換成"讚"，並且讚數-1
				$("#n"+news).text("讚")
				$("#g"+news).text($("#g"+news).text()*1-1)
			break;
		} */
	})
}