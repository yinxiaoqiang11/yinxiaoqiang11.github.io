
function sub(){
	var title=$("#title").val();
	var intruduce=$("#intruduce").val();
	var author=$("#author").val();
	var publish=$("#publish").val();
	var datetim=$("#datetim").val();
	var price=$("#price").val();
	var ISBN=$("#ISBN").val();
	var img=$("#seclect")[0]['files'][0];
	

	var form=new FormData();
	form.append("title",title);
	form.append("intruduce",intruduce);
	form.append("author",author);
	form.append("publish",publish);
	form.append("datetim",datetim);
	form.append("price",price);
	form.append("ISBN",ISBN);
	form.append("img",img);
	$.ajax({
		type:"post",
		url:"submit.php",
		data:form,
		processData:false,
		contentType:false,
		success:function(data){
			console.log(data);
		}



	})





}
