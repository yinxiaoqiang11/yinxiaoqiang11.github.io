<script>
		export default{
			data(){
				return {}
			},
			props:[],
			methods:{
				toHome:function(){
					this.$emit(toHome)
				},
				toOther:function(){
					this.$emit(toOther)
				}
			}
		};

		$(function(){
			var opTimer=null;
			var timer=null;
			var n=0;
			var length = $('.lunbo ol li').length;
			$('.lunbo .pre').click(pre);
			$('.lunbo .next').click(next);

			$('.dot li').click(function(){
				n=$(this).index()
				opChange()
			})
			clearInterval(opTimer);
			timer=setInterval(function(){
				next();
			},3000)

			function pre(){
				n--;
				if(n<0){
					n=length-1;
				}
				opChange();
			}

			function next(){
				n++;
				if(n==length){
				n=0;
				}
				opChange();
			}
			function opChange(){
				$('.pic a').css({
					opacity:0,
					filter:'alpha(opacity=0)'
				})
				$('.dot li').removeClass('active')
				clearInterval(opTimer);
				opTimer=setInterval(function(){
					$('.pic a').eq(n).css({
						opacity:'+=0.05',
						filter:`alpha(opacity=${'+=0.5'})`
					})
					if($('.pic a').eq(n).css('opacity')>=1){
						clearInterval(opTimer);
					}
				},50)
				$('.dot li').eq(n).addClass('active')
			}
		})
</script>

<template>
	<div class="myHead">
		<!-- webpack压缩js后有的背景图片以tools开头失效,改为网络图片后OK，不然就用img代替 -->
        <div class="top"></div>
        <div class="nav" v-cloak>
            <ul class="nav_list">
            <li><a href="index.html">网站首页</a></li>
            <li><a href='manor.html'>庄园简介</a></li>
            <li><a href='news.html'>新闻资讯</a></li>
            <li><a href='product.html'>产品展示</a></li>
            <li><a href='grape.html'>葡萄园风光</a></li>
            <li><a href='technology.html'>科技知识</a></li>
            <li><a href='message.html'>在线留言</a></li>
            <li><a href='concat.html'>联系我们</a></li>
        </ul>
        </div>
        <div class="lunbo">
            <ul class="pic">
                <li class="first">
                    <a href="" target="_blank">
                        <img src="http://image.baidu.com/search/detail?ct=503316480&z=undefined&tn=baiduimagedetail&ipn=d&word=%E7%94%9F%E6%80%81%E8%91%A1%E8%90%84%E5%9B%AD&step_word=&ie=utf-8&in=&cl=2&lm=-1&st=undefined&cs=3153052932,1363296928&os=441337776,3489431183&simid=4255002249,629897195&pn=3&rn=1&di=203942987160&ln=1975&fr=&fmq=1498890801526_R&fm=&ic=undefined&s=undefined&se=&sme=&tab=0&width=undefined&height=undefined&face=undefined&is=0,0&istype=0&ist=&jit=&bdtype=0&spn=0&pi=0&gsm=0&hs=2&objurl=http%3A%2F%2Fimg.cywimg.com%2Fuploadfiles%2F500000%2F2%2F2015%2F06%2F30%2F3ff4720f-9f89-4633-91cc-70b5926dc346.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="http://www.ahgxny.com/upLoad/slide/month_1509/201509220813119479.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img src="http://www.ahgxny.com/upLoad/slide/month_1510/201510191533078701.jpg" alt="">
                    </a>
                </li>
            </ul>
            <ol class="dot">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ol>
            <div class="pre"></div>
            <div class="next"></div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
	$themColor:#558f1a;
	[v-cloak]{
		display: none;
	}
	.myHead{
		.top{
			height: 105px;
			background:url(http://www.ahgxny.com/Templates/xl2015/images/HEAD1.jpg) no-repeat center; 
		} 
		.nav{
			width:100%;
			height:47px;
			background: #000;
			position:relative;
			z-index: 1;
			.nav_list{
				width:1160px;
				margin:0 auto;
				li{
					padding-left: 7px;
					padding-right: 5px;
					float: left;
					a{
						color:white;
						display: block;
						width:132px;
						height:54px;
						text-align: center;
						line-height: 54px;
						font-weight: bold;
						&:hover{
							background: url(../dest/img/LI.png);
						}
					}
				}
			}
		}

		.lunbo{
			position:relative;
			width:1960px;
			height:615px;
			left:50%;
			margin-left: -980px;
			a{
				display:block;
				height:615px;	
				position: absolute;
				opacity:0;
				filter:alpha(opacity=0);
				img{
					width:100%;
					height:100%;
				}
			}
			.first a{
				opacity:1;
				filter:alpha(opacity=100);
			}
			ol{
				position:absolute;
				bottom: 32px;
				left:960px;
				overflow: hidden;
				li{
					width:14px;
					height:14px;
					border-radius: 50%;
					margin: 0 7px;
					background:rgb(217,217,217);
					float:left;
					&:hover{
						background: #3a7d18;
					}
				}
				.active{
					background: #3a7d18;
				}
			}
		}
		.pre,.next{
			position:absolute;
			top:40%;
			left:330px;
			width:54px;
			height:94px;
			cursor: pointer;
			background: url(../dest/img/lr1.png) no-repeat;
		}
		.next{
			left:auto;
			right: 330px;
			background: url(../dest/img/lr2.png) no-repeat;
		}
	}
</style>