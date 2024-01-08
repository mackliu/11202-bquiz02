// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(news){
	$.post("./api/good.php",{news},()=>{
		location.reload();
	})
	}