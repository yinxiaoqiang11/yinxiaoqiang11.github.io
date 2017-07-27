<template>
	
<div class="container">
	<div class="s_header">
		<div class="left">
			<span>3.9分</span>
			<span>综合评分</span>
			<span>高于周边商家69.2%</span>
		</div>
		<div class="right">
			<div class="top1">
				<span class="fuwu">服务态度</span>
				<ul>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
              </ul>
              <span class="fenshu">3.9</span>
			</div>
			<div class="top1">
				<span class="fuwu">服务质量</span>
				<ul>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="isStarShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
              </ul>
              <span class="fenshu">4.0</span>
			</div>
			<div class="top1">
				<span class="fuwu">送达时间</span>
				<ul>
	                <li>
	                  <span class="fenzhong">
	                    44分钟
	                  </span>
	                </li>
               
              </ul>
              <span></span>
			</div>
		</div>
	</div>
	<div class="tabb">
		<div class="tabbb">
			<a href="javascript:void(0);">全部<span>{{sum}}</span></a>
			<a href="javascript:void(0);" v-on:click="add">满意<span>{{counter}}</span></a>
			<a href="javascript:void(0);" v-on:click="baa">不满意<span>{{bad}}</span></a>
		</div>
		<div class="tabb_b">
			<img src="../../../resource/img/1212.png">
			<span>只看有内容的评价</span>
		</div>
	</div>
	<div class="kehu">
		<ul class="kehu1" v-if="datadata">
			<li class="li1" v-for="item in datadata">
				<div class="kehu_top">
					<div class="kehu_t_l">
						<img :src="item.avatar">
					</div>
					<div class="kehu_t_r">
						<h1>
							<span>{{item.username}}</span>
							<span>2016-07-13&nbsp;20:83</span>
						</h1>
						<div class="kehu_bottom">
							<ol class="kehu2">
								 <li>
				                  <span>
				                    <img src="../../../resource/img/star48_on@2x.png">
				                  </span>
				                  <span v-show="isStarShow">
				                     <img src="../../../resource/img/star48_off@2x.png">
				                  </span>
				                </li>
				                <li>
				                  <span>
				                    <img src="../../../resource/img/star48_on@2x.png">
				                  </span>
				                  <span v-show="isStarShow">
				                     <img src="../../../resource/img/star48_off@2x.png">
				                  </span>
				                </li>
				                <li>
				                  <span>
				                    <img src="../../../resource/img/star48_on@2x.png">
				                  </span>
				                  <span v-show="isStarShow">
				                     <img src="../../../resource/img/star48_off@2x.png">
				                  </span>
				                </li>
				                <li>
				                  <span>
				                    <img src="../../../resource/img/star48_on@2x.png">
				                  </span>
				                  <span v-show="isStarShow">
				                     <img src="../../../resource/img/star48_off@2x.png">
				                  </span>
				                </li>
				                <li>
				                  <span>
				                    <img src="../../../resource/img/star48_on@2x.png">
				                  </span>
				                  <span v-show="isStarShow">
				                     <img src="../../../resource/img/star48_off@2x.png">
				                  </span>
				                </li>
							</ol>
							<span class="fenzhong">{{item.deliveryTime}}分钟送达</span>
						</div>
						<p class="duanfa">{{item.text}}</p>
						<div class="zan">
							<div>
								<span v-on:click="zan" v-show="istuShow">
									<img src="../../../resource/img/bishi.png">
								</span>
								<span v-on:click="zan" v-show="istu1Show">
									<img src="../../../resource/img/zan.png">
								</span>
							</div>
							<div class="dibu">
								<p class="dawang" :class="{activee:chu}" v-for="value in item.recommend" v-on:click="bb">{{value}}</p>
							</div>	
						</div>
					</div>
				</div>
				
			</li>
		</ul>
	</div>
</div>
</template>	
<script type="text/javascript">
	export default{
		data(){
			return {
				isStarShow:false,
				datadata:"",
				istuShow:false,
				istu1Show:true,
				chu:false,
				counter:0,
				bad:0,
				sum:0
			}
		},
		created(){
			this.$http.get("/api/ratings")
			.then(function(response){
				return response.json();
			})
			.then(function(response){
				if(response.success===1){
					this.datadata=response.data;
				}
			})
		},
		methods:{
			zan:function(){
				this.istuShow=!this.istuShow;
				this.istu1Show=!this.istu1Show;
			},
			bb:function(){
				this.chu=!this.chu;
			},
			add:function(){
				this.counter+=1;
				this.sum=this.counter+this.bad;
			},
			baa:function(){
				this.bad+=1;
				this.sum=this.bad+this.counter;
			},
		}

	}
</script>
<style type="text/css">
	.container{
		background-color: #f3f5f7;
		overflow: auto;
		height:69vh; 
	}
	.container .s_header{
		display: flex;
		flex-direction: row;
		justify-content:flex-start;
		padding-top:18px;
		padding-bottom: 18px; 
		border-bottom: 1px solid #e6e7e8;
		margin-bottom: 17px;
		background-color: #fff;
	}
	.container .s_header .left{
		width: 138px;
		border-right:1px solid #e6e7e8;
		height: 70px;
	}
	.container .s_header .left span{
		display:block;
		text-align: center;
	}
	.container .s_header .left span:nth-child(1){
		font-size: 24px;
		line-height: 28px;
		color: rgb(255,153,0);
		margin-bottom: 6px;
	}
	.container .s_header .left span:nth-child(2){
		font-size: 12px;
		line-height: 12px;
		color: rgb(7,17,27);
		margin-bottom: 8px;
	}
	.container .s_header .left span:nth-child(3){
		font-size: 10px;
		line-height: 10px;
		color: #a4a9ae;
	}
	.container .s_header .right{
		margin: 0;
		margin-left: 12px;
	}
	.container .s_header .right .top1{
		display: flex;
		justify-content:flex-start;
		flex-direction: row;
		margin-bottom: 8px;
	}
	.container .s_header .right .top1 span{
		color:#07111b;
		font-size: 12px;
		line-height: 18px;
	}
	.container .s_header .right .top1 ul{
		list-style: none;
		margin:0 12px; 
	}
	.container .s_header .right .top1 ul li{
		float:left;
		margin-right:7px;

	}
	.container .s_header .right .top1 ul li img{
		width: 15px;
		height: 15px;
	}
	.container .s_header .right .top1 .fenshu{
		font-size: 12px;
		color:rgb(255,153,0);
		line-height: 18px;
	}
	.container .s_header .right .top1 .fenzhong{
		font-size: 12px;
		color:rgb(147,153,159);
		line-height: 18px;
	}
	.container .tabb{
		padding-top: 18px;
		border-top:1px solid #e6e7e8;
		background-color: #fff;
		padding-left: 18px;
	}
	.container .tabb .tabbb{
		border-bottom: 1px solid #e6e7e8;
		margin-right: 18px;
	}
	.container .tabb .tabbb a{
		display: inline-block;
		padding: 10px;
		text-align: center;
		line-height: 32px;
		background-color: #00a0dc;
		border-radius: 2px;
		text-decoration: none;
		color:#fff;	
		margin-right: 10px;
		margin-bottom: 18px;
	}
	.container .tabb .tabbb a:nth-child(2){
		background-color: #ccecf8;
		color:#4d555d;
	}
	.container .tabb .tabbb a:nth-child(3){
		background-color: #e9ebec;
		color:#4d555d;
	}
	.container .tabb .tabbb a span{
		font-size: 7px;
		margin-left: 3px;
	}
	.container .tabb .tabb_b{
		height: 50px;
		line-height: 50px;
	}
	.container .tabb .tabb_b img{
		width: 20px;
		height: 20px;
		vertical-align:middle;
	}
	.container .tabb .tabb_b span{
		color:#b4b8bb;
	}
	.kehu{
		background-color: #fff;
		border-top:1px solid #e6e7e8;
		height:31vh;
		overflow: auto; 
	}
	.kehu ul{
		list-style: none;
	}
	.kehu .kehu1{
		padding: 18px;	
	}
	.kehu .kehu1 .li1{
		border-bottom: 1px solid #e6e7e8;
		margin-bottom: 18px;
	}
	.kehu .kehu1 .li1 .kehu_top{
		display: flex;
		flex-direction: row;
		justify-content:flex-start; 
		margin-bottom: 6px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_l{
		width: 28px;
		height: 28px;
		margin-right: 12px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_l img{
		width: 28px;
		height: 28px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r{
		flex:1;
		margin-bottom: 18px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r h1{
		justify-content: space-between;
		flex-direction: row;
		display: flex;
		margin-bottom: 4px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r span{
		font-size: 10px;
		color:rgb(7,17,27);
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r span:nth-child(2){
		font-size: 10px;
		color:rgb(147,153,159);
		font-weight: 100;
		line-height: 12px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .kehu_bottom .kehu2{
		list-style: none;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .kehu_bottom .kehu2 li{
		width:10px;
		height: 10px;
		float:left; 
		margin-right: 6px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .kehu_bottom .kehu2 li img{
		width:10px;
		height: 10px;
		float:left; 
		margin-right: 6px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .kehu_bottom .fenzhong{
		font-size: 12px;
		color:rgb(147,153,159);
		line-height: 18px;
		vertical-align: top;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan{
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		text-overflow:ellipsis; 
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan div{
		padding: 6px;
		align-items: center;
		margin-right: 8px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan div img{
		width: 11px;
		height: 11px;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan .dibu{
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		width:260px; 

	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan .dibu .activee{
		white-space: normal;
	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .zan .dibu p{
		padding: 6px;
		border:1px solid rgba(7,17,27,0.1);
		border-radius: 2px;
		background-color: rgb(255,255,255);
		font-size: 9px;
		color: rgb(147,153,159);
		line-height: 16px;
		vertical-align: middle;
		margin: 0;
		margin-right: 8px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;

	}
	.kehu .kehu1 .li1 .kehu_top .kehu_t_r .duanfa{
		font-size: 12px;
		color: rgb(7,17,27);
	}
	

</style>
</style>







