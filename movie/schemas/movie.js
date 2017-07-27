var mongoose=require("mongoose");
var Movie=new mongoose.Schema({
	doctor: String,
    title: String,
    language: String,
    country: String,
    poster: String,
    summary: String,
    year: Number,
    meta:{
    	createAt:{
    		type:Date,
    		default:Date.now()
    	},
    	updataAt:{
    		type:Date,
    		default:Date.now()
    	}
    }
})



//为模式添加新的方法


Movie.pre("save",function(next){
	if(this.isNew){
		this.meta.createAt=this.meta.updataAt=Date.now();
	}else{
		this.meta.updataAt=Date.now();
	}
	next();
})

Movie.statics={
	fetch:function(cb){
		return this
		.find()
		.sort("meta.updataAt")
		.exec(cb)
	},
	findById:function(id,cb){
		return this
		.findOne({_id:id})
		.exec(cb)
	}
}

module.exports=Movie;