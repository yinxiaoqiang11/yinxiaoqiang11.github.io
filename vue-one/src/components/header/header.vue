<template>
    <div class="header" v-if="datas">
      <div class="info">
        <div class="pic">

        </div>
        <div class="right">
          <div class="one">
            <span></span>
            <span>{{datas.name}}</span>
          </div>
          <div class="two">
            <span>{{datas.description}}</span>/
            <span>{{datas.deliveryTime}}分钟到达</span>
          </div>
          <div class="three">
            <span></span>
            <span>{{datas.supports[0].description}}，满50减10</span>
          </div>
        </div>
      </div>
      <div class="message">
        <span>12像素</span>
        <span>{{datas.bulletin}}</span>
        <span>></span>
      </div>
      <div class="btn" @click="change">
        <span id="dd1">5个</span>
        <span id="dd2">></span>
        </div>
      <div class="bg"></div>
      <div class="mask" v-show="isShow" @click="change">
        <div class="m_header">
          <h1>粥品香坊（大运村）</h1>
          <div class="m_middle">
              <ul>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="starShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="starShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="starShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="starShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
                <li>
                  <span>
                    <img src="../../../resource/img/star48_on@2x.png">
                  </span>
                  <span v-show="starShow">
                     <img src="../../../resource/img/star48_off@2x.png">
                  </span>
                </li>
              </ul>
          </div>
          <div class="m_bottom">
            <span class="left"></span>
            <span class="middle">优惠信息</span>
            <span class="left"></span>
          </div>
        </div>
        <div class="m_tejia">
          <p>
            <span>
            <img src="../../../resource/img/decrease_2@2x.png">
            </span>
            <span>在线支付满28减5，满50减10</span>
          </p>
           <p>
            <span>
            <img src="../../../resource/img/discount_2@2x.png">
            </span>
            <span>单人精彩赛</span>
          </p>
           <p>
            <span>
            <img src="../../../resource/img/discount_2@2x.png">
            </span>
            <span>清肺雪梨汤8折抢购</span>
          </p>
           <p>
            <span>
            <img src="../../../resource/img/special_2@2x.png">
            </span>
            <span>特价饮品八折抢购</span>
          </p>
          <p>
            <span>
            <img src="../../../resource/img/special_2@2x.png">
            </span>
            <span>单人特色套餐</span>
          </p>
        </div>
        <div class="m_header m_header1">
          <div class="m_bottom">
            <span class="left"></span>
            <span class="middle">优惠信息</span>
            <span class="left"></span>
          </div>
        </div>
        <p id="p1">粥品香坊其烹饪粥料的秘方源于中国千年古法，在融和现代制作工艺，由世界烹饪大师屈浩先生领衔研发。坚守纯天然、0添加的良心品质深得消费者青睐，发展至今成为粥类的引领品牌。是2008年奥运会和2013年园博会指定餐饮服务商。</p>
        <div id="footer">
          <span>x</span>
        </div>
      </div>
    </div>
</template>

<script>
  export default{
  data(){
      return {
       isShow:false,
       datas:"",
       starShow:false
      }
    },
    created(){
      this.$http.get("/api/seller")
      .then(function(response){
          return response.json();
      }).then(function(response){
          if(response.success===1){
            this.datas=response.data;
          }
      })
    },
    methods:{
      change:function(){
        this.isShow=!this.isShow;
      }
    },
    
  }
</script>

<style>
  .header{
    font-size: 0;
    position: relative;
    background-color:rgba(7,17,27,0.5);
  }
  .pic{
    display: inline-block;
    width:64px;
    height:64px;
    margin:24px 16px 18px 24px;
    background: url("http://static.galileo.xiaojukeji.com/static/tms/seller_avatar_256px.jpg") 0 0 no-repeat;
    border-radius: 4px;
    background-size: cover;
  }
  .right{
    display: inline-block;
    margin:24px 0 0 0;
    vertical-align: top;
  }
  .right .one{
    font-size:16px;
    color:#fff;
    font-weight: bold;
    line-height: 18px;
    margin-bottom: 8px;
  }
  .right .one span{
    display: inline-block;
  }
  .right .one span:first-child{
    background: url("../../../resource/img/brand@2x.png");
    width:30px;
    height:18px;
    background-size: 30px 18px;
  }
  .right .one span:last-child{
    vertical-align: top;
  }
  .right .two{
    font-size: 12px;
    color: rgb(255,255,255);
    font-weight:100;
    line-height:12px;
    margin-bottom: 10px;
  }
  .right .two span{
    display: inline-block;
  }
  .right .three{
    font-size: 10px;
    color: rgb(255,255,255);
    font-weight:100;
    line-height:12px;
    vertical-align: middle;
  }
  .right .three span{
    display: inline-block;
    vertical-align: middle;
  }
  .right .three span:first-child{
    background: url("../../../resource/img/decrease_1@2x.png");
    width:20px;
    height:20px;
    background-size: 20px 20px;
  }
  .message{
    height:28px;
    line-height: 28px;
    background-color: rgba(7,17,27,0.2);
  }
  .message span:first-child{
    display: inline-block;
    vertical-align: top;
    background: url("../../../resource/img/bulletin@3x.png");
    width:30px;
    height:18px;
    background-size: 30px 18px;
    margin: 4px 4px 0 12px;
  }
  .message span:nth-child(2){
    display: inline-block;
    font-size: 10px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    width:80%;
    color:#fff;
  }
  .message span:nth-child(3){
    display: inline-block;
    font-size: 10px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin-left: 4px;
    color:#fff;
  }
  .bg{
    position: absolute;
    width:100%;
    height:100%;
    left:0;
    top:0;
    background-image:url("http://static.galileo.xiaojukeji.com/static/tms/seller_avatar_256px.jpg");
    background-position: 0 0;
    background-repeat: no-repeat;
    background-size: cover;
    filter: blur(5px);
    z-index: -1;
  }
  .btn{
    position: absolute;
    width:48px;
    line-height: 24px;
    border-radius: 10px;
    text-align: center;
    color:#fff;
    right:12px;
    bottom: 38px;
    font-size:10px;
    background-color:rgba(0,0,0,0.2);
  }
  .btn span{
    font-size: 10px;
    color: rgb(255,255,255);
    font-weight:100;
    line-height:12px;
    vertical-align: middle;
  }
  .btn #dd2{
    margin-left: 2px;
  }

</style>
