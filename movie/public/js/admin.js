$(function(){

	$(".del").on("click",function(){
		var id=$(this).data("id");
		var hang=$(".item-id-"+id);
		console.log(id)
		$.ajax({
			type:"DELETE",
			url:"/admin/list?id="+id
		})
		.done(function(res){
			if(res.success==1){
				if(hang.length>0){
					hang.remove();
				}
			}
		})
	})


})