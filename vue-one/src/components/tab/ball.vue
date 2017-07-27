<template>
	<div class="youfu ball">
		<transition name="move">
			<span v-show="items.count>0" class="icon-decrease" v-on:click="decreaseNum">
				<span class="inner">
					<img src="../../../resource/img/222.png">	
				</span>
			</span>
		</transition>
		<span v-show='items.count>0' class="icon-count">{{items.count}}</span>
		<span v-on:click="addCartNum" class="icon-add">
			<img src="../../../resource/img/22.png">
		</span>
	</div>
</template>
<script>
//vue.js当新增一个属性时，不能被监测到，所以通过使用Vue.set()建立
import Vue from "vue";
	export default{
		props:{
			items:{
				type:Object
			}
		},
		methods:{
			addCartNum(event){
				// 防止pc端点击两次
				if(!event._constructed){
					return;
				}
				if(!this.items.count){
					Vue.set(this.items,'count',1);
				}else{
					this.items.count++;
				}
			},
			decreaseNum(event){
				if(!event._constructed){
					return;
				}
				if(this.items.count){
					this.items.count--;
				}
			}
		}



	}
</script>
<style>
	.ball span{
		display: inline-block;
	}
	.ball span img{
		width: 20px;
		height: 20px;
	}
	.ball .icon-decrease{
		width: 20px;
		height: 20px;
		transition: all 0.4s linear;

	}
	.move-enter-active, .move-leave-active {
	  opacity:1;
	  transform: translate3d(0,0,0);
	}
	.move-enter-active, .move-leave-active .inner{
		width: 20px;
		height: 20px;
		transform: rotate(0deg);
		transition: all 0.4s linear;
		
	}
	.move-enter, .move-leave-active{
		opacity: 0;
		transform: translate3d(24px,0,0);
	}
	.move-enter, .move-leave-active .inner{
		transform: rotate(180deg);
	}
	.ball .icon-count{
		color:#93999f;
		font-size: 10px;
		vertical-align: top;
		line-height: 20px;
		text-align: center;
		width: 20px;
		height: 20px;
	}
	.ball .icon-add{
		width: 20px;
		height: 20px;
	}
</style>