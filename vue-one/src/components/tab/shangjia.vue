<template>
<div class="sh">
	<div class="shangjia_main">
		<div class="shangjia">
			<div class="right">
				<h1>粥品香坊（大运村）</h1>
				<div class="top1">
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
		          <span class="fenshu">(661)</span>
		          <span>月售690单</span>
				</div>
			</div>
			<div class="left">
				<p>
					<img src="../../../resource/img/xin.png">
				</p>
				<p>已收藏</p>
			</div>
		</div>	
	</div>
	<div class="three">
			<div class="three1">
			   <p>
			   	<span>起送价</span>
				<span>20<i>元</i></span>
			   </p>		
			</div>
			<div class="three1">
				<p id="nn">
					<span>商家配送</span>
					<span>4<i>元</i></span>
				</p>
			</div>
			<div class="three1">
				<p>
					<span>平均配送时间</span>
					<span>39<i>分钟</i></span>
				</p>
			</div>
	</div>
	<div class="four">
	</div>
	<div class="five">
		<h2>公告与活动</h2>
		<p>粥品香坊其烹饪粥料的秘方源于中国千年古法，在融和现代制作工艺，由世界烹饪大师屈浩先生领衔研发。坚守纯天然、0添加的良心品质深得消费者青睐，发展至今成为粥类的引领品牌。是2008年奥运会和2013年园博会指定餐饮服务商。</p>
	</div>
	<div class="six">
		<ul>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
			<li>
				<span><img src="../../../resource/img/decrease_2@2x.png"></span>
				<span>在线支付满28减5，满50减10</span>
			</li>
		</ul>
	</div>
	<div class="four">
	</div>
	<div class="senven">
		<h2>商家实景</h2>
		<ul>
			<li>
				<img src="../../../resource/img/fang.png">
			</li>
			<li>
				<img src="../../../resource/img/fang.png">
			</li>
			<li>
				<img src="../../../resource/img/fang.png">
			</li>
		</ul>
		
	</div>
	<div class="four">
	</div>
	<div class="eight">
		<h2>商家信息</h2>
		<p>该商家支持开发票，请在下单时填写好发票抬头</p>
		<p>该商家支持开发票，请在下单时填写好发票抬头</p>
		<p>该商家支持开发票，请在下单时填写好发票抬头</p>
		<p>该商家支持开发票，请在下单时填写好发票抬头</p>
	</div>

</div>
	
</template>
<style type="text/css">
html,body{
	width:100%;
	height:100%;
}
.sh{
	overflow: auto;
	height:500px;
}
.shangjia_main{
	padding: 18px;
	padding-bottom: 0px;
}

.shangjia{
	display: flex;
	justify-content:space-between;
	flex-direction: row;
	border-bottom:1px solid #e6e7e8;
}
.shangjia .left{
	text-align: center;
}
.shangjia .left p{
	margin: 0;
	font-size: 10px;
	color:rgb(77,85,93);
	line-height: 20px;
}
.shangjia .right{
		margin: 0;
	    margin-bottom: 18px;

	}
	.shangjia .right h1{
		font-size: 14px;
		color:rgb(7,17,27);
		margin-bottom: 8px;
	}
.shangjia .right .top1{
		display: flex;
		justify-content:flex-start;
		flex-direction: row;
		margin-bottom: 8px;
	}
.shangjia .right .top1 span{
		color:#07111b;
		font-size: 12px;
		line-height: 18px;
	}
.shangjia .right .top1 ul{
		list-style: none;
		margin:0 1px; 
		margin-left: 0px;
	}
.shangjia .right .top1 ul li{
		float:left;
		margin-right:7px; 
	}
.shangjia .right .top1 ul li img{
		width: 15px;
		height: 15px;
	}
.shangjia .right .top1 .fenshu{
		font-size: 12px;
		color:#6e747a;
		line-height: 18px;
		margin-right: 12px;
	}
.shangjia .right .top1 .fenzhong{
		font-size: 12px;
		color:rgb(147,153,159);
		line-height: 18px;
	}
.sh .three{
	display: flex;
	justify-content:flex-start;
	flex-direction: row;
	height: 74px;

}
.sh .three .three1{
	align-items: center;
	justify-content: center;
	flex: 1;
	height: 74px;
}
.sh .three .three1 span{
	font-size: 10px;
	color:rgb(147,153,159);
	display: block;
	text-align: center;
}	
.sh .three .three1 p{
	line-height:18px;
	margin-top:19px;
} 
.sh .three .three1 #nn{
	border-left:1px solid rgb(147,153,159);
	border-right:1px solid rgb(147,153,159);
}
.four{
	height:16px;
	background-color: #f3f5f7;
	border-top:2px solid #e6e7e8;
	border-bottom:2px solid #e6e7e8;

}
.five{
	padding-top: 18px;
}
.five h2{
	font-size: 13px;
	color:#07111b;
	margin-bottom: 8px;
	padding-left: 18px;
}
.five p{
	padding-left: 30px;
	padding-right: 30px;
	line-height: 24px;
	color:red;
}
.six{
	padding-left:18px;
	padding-right: 18px;
}
.six ul{
	list-style: none;
}
.six ul li{
	border-top:1px solid #e6e7e8;
	padding:16px;
	padding-left:12px;

}
.six ul li span img{
	width: 16px;
	height: 18px;
	vertical-align: middle;
}
.six ul li span{
	font-size: 12px;
	font-weight: 100;
	color: rgb(7,17,27);
	line-height: 16px;
}
.senven{
	padding: 18px;
	overflow: hidden;
}
.senven h2{
	margin-bottom: 12px;
	font-size: 13px;
	color:#07111b;
}
.senven ul{
	list-style: none;
	display:flex;
	justify-content: flex-start;
	flex-direction: row;
}
.senven ul li{
	flex-grow:1;

}
.senven ul li:nth-child(3n+2){
	margin-left: 6px;
	margin-right: 6px;
}
.senven ul li img{
	width: 28vw;
	height: 90px;
}
.eight{
	padding-left: 18px;
	padding-right: 18px;
	padding-top: 12px;
}
.eight h2{
	color:#07111b;
	margin-bottom: 12px;
}
.eight p{
	border-top:1px solid rgba(7,17,27,0.1);
	padding-top: 16px;
	padding-bottom: 16px;
	padding-left: 12px;
	padding-right: 12px;
	margin: 0;
	font-size: 12px;
	font-weight: 100;
	color:rgb(7,17,27);
}
</style>
<script type="text/javascript">
	export default{
		data(){
			return {
				isStarShow:false
			}
		}
	}
</script>