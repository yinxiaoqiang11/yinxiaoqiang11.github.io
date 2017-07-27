<template>
  <div id="app">
    <v-header></v-header>
    <div class="tab">
      <div class="item">
        <router-link to="/foo">商品</router-link>
      </div>
      <div class="item">
        <router-link to="/bar">评价</router-link>
      </div>
      <div class="item">
        <router-link to="/car">商家</router-link>
      </div>
    </div>
     <router-view></router-view>
     <foo :deliveryPrice="dataBase.deliveryPrice" :minPrice="dataBase.minPrice"></foo>
  </div>
</template>

<script>
  import header from "./components/header/header.vue"
  import foo from "./components/header/footer.vue"
  import BScroll from "better-scroll";


  export default {
    data:function(){
      return {
        dataBase:{}
      }
    },
    components:{
      "v-header": header,
      foo
    },
    created(){
      this.$http.get("/api/seller")
      .then(function(response){
        return response.json();
      })
      .then(function(response){
        if(response.success===1){
          this.dataBase=response.data;
        }
      })
    }
  }
</script>

<style>
    /*#app{
    width:100vw;
    height:100vh;
    overflow:hidden;
    }*/
    ul,ol,h1,h2,li{
    margin:0;
    padding:0;
    }
  .tab{
    display:flex;
    width:100%;
    height:40px;
    line-height: 40px;
    border-bottom: 1px solid rgba(7,17,27,0.1);
  }
  .tab .item{
    flex:1;
    text-align: center;
    font-size: 14px;
    color:rgb(77,85,93)
  }
  .tab .item a{
    text-decoration:none;
    color:#7c8186;
  }
  .tab .item .router-link-active{
    color:red;
  }
  .mask{
    position: absolute;
    width:100vw;
    min-height:100vh;
    left:0;top:0;
    background-color:rgba(7,17,27,0.8);
    display: flex;
    flex-flow: column;
    min-height: 100vh;
    z-index:2;
  }
  .mask .m_header{
    padding-top:64px;
  }
  .mask .m_header h1{
    font-size:16px;
    font-weight:350;
    color:rgb(255,255,255);
    line-height:16px;
    text-align:center;
    margin-bottom: 16px;
  }
  .mask .m_header .m_middle{
    height: 24px;
    margin-bottom: 28px;
  }
  .mask .m_header .m_middle ul{
    list-style: none;
    width: 200px;
    height: 20px;
    margin: 0 auto;

  }
  .mask .m_header .m_middle ul li{
    float:left;
    margin-right: 20px;
  }
   .mask .m_header .m_middle ul li img{
    width: 20px;
    height: 20px;
   }
   .mask .m_header .m_bottom{
      padding:0px 36px;
      height:13px;
      margin-bottom:24px; 
   }
    .mask .m_header .m_bottom span{
      display: inline-block;
      vertical-align: middle;
    }
    .mask .m_header .m_bottom .left{
      width: 110px;
      height: 1px;
      background-color:#61676d;

    }
     .mask .m_header .m_bottom .middle{
      font-size: 14px;
      color:#fff;
      margin-left: 12px;
      margin-right: 12px;
     }
     .mask .m_tejia{
      padding-left: 48px;
      margin-bottom: 28px;
     }
     .mask .m_tejia p{
      margin-bottom: 12px;
     }
      .mask .m_tejia p span{
        font-size: 12px;
        color:#fff;
        font-weight: 100;
        line-height: 17px;
        vertical-align: top; 

      }
     .mask .m_tejia p span img{
        width: 17px;
        height: 17px;
        margin-right: 6px;
     }
     .mask .m_header1{
      padding-top: 0px;
     }
     .mask #p1{
      font-size: 12px;
      font-weight: 100;
      color: #fff;
      line-height: 24px;
      padding-left: 48px;
      padding-right: 48px;
      flex:1;
     }
     .mask #footer{
      font-size: 32px;
      color:rgba(255,255,255,0.5);
      text-align: center;
      margin-bottom: 32px;
     }
</style>
