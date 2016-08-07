function callAjax()
{
	var url=document.getElementById("url").value;
	$.get("fetchContents.php?url="+url,function(data,status){
		document.getElementById("download").innerHTML="<a href='download.php?download_file=document1.pdf'>Download</a>";
	});
}