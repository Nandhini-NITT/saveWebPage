function callAjax()
{
	var url=document.getElementById("url").value;
	$.get("fetchContents.php?url="+url,function(data,status){
		alert(data);
	});
}