var express=require("express");
var path=require("path");
var mongoose=require("mongoose");

var bodyParse=require("body-parser");
//设置端口号
var port=process.env.PORT||3000;

var Movie=require("./models/Move")



//连接数据库

mongoose.connect("mongodb://localhost:27017/Moviedata",function(err,data){
	if(err){
		console.log(err)
	}else{
		console.log("数据库连接成功")
	}
})


var app=express();

//建立模板视图目录
app.set("views","./views/libs");


//建立模板引擎

app.set("view engine","jade");



//设置静态目录

app.use(bodyParse.json());
app.use(bodyParse.urlencoded({extended:true}));

app.use(express.static(path.join(__dirname,"public")));

app.listen(port,function(){
	console.log("项目已跑在3000端口");
})


//首页


app.get("/",function(req,res){
	Movie.fetch(function(err,movies){
		if(err){
			console.log(err)
		}else{
			res.render("index",{
			title:"首页",
			movies:movies
	})
		}
	})

})
app.get("/admin/movie",function(req,res){
	res.render("admin",{
		title:"后台数据录入页",
	    movie: {
	      doctor: '',
	      country: '',
	      title: '',
	      year: '',
	      poster: '',
	      language: '',
	      flash: '',
	      summary: ''
	    }
	})
})

app.get("/admin/list",function(req,res){
	Movie.fetch(function(err,movie){
		if(err){
			console.log(err)
		}else{
			res.render("list",{
			title:"电影列表",
			movies:movie
	})
		}
	})
	
})

app.get("/movie/:id",function(req,res){
	var id=req.params.id;
	Movie.findById(id,function(err,movie){
		if(err){
			console.log(err)
		}else{
			res.render("detail",{
			title:"详情页>"+movie.title,
			movie: movie
	})
		}
	})
	
})

//表单提交页
app.post("/admin/movie/new",function(req,res){
	var id=req.body.movie._id;
	var movieObj=req.body.movie;
	var _movie;
	if(id!=="undefined"){
		Movie.findById(id,function(err,movie){
			if(err){
				console.log(err)
			}else{
				_movie=Object.assign(movie,movieObj);
				_movie.save(function(err,movie){
					if(err){
						console.log(err)
					}else{
						res.redirect("/movie/"+movie._id);
					}
				})
			}
		})
	}else{
		_movie=new Movie({
			doctor: movieObj.doctor,
            title: movieObj.title,
            country: movieObj.country,
            poster: movieObj.poster,
            year: movieObj.year,
            language: movieObj.language,
            summary: movieObj.summary,
            flash: movieObj.flash
		})
		_movie.save(function(err,movie){
			if(err){
				console.log(err)
			}else{
				res.redirect("/movie/"+movie._id);
			}
		})
	}

})

app.get("/admin/update/:id",function(req,res){
	var id=req.params.id;
	if(id){
		Movie.findById(id,function(err,movie){
			if(err){
				console.log(err)
			}else{
				res.render("admin",{
					title:"数据更新页"+movie.title,
					movie:movie
				})
			}
		})
	}
})

//删除
app.delete("/admin/list",function(req,res){
	var id=req.query.id;
	if(id){
		Movie.remove({_id:id},function(err,movie){
			if(err){
				console.log(err);
			}else{
				res.json({success:1});
			}
		})
	}
})