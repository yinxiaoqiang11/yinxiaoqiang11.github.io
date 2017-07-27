

import Vue from 'vue';
import VueRouter from "vue-router";
import VueResource from "vue-resource";
import App from "./App.vue";
import Tab from "./components/tab/tab.vue";
import Speak from "./components/tab/speak.vue";
import Shangjia from "./components/tab/shangjia.vue";
import Detail from "./components/tab/detail.vue";






Vue.use(VueRouter);
Vue.use(VueResource);



const router = new VueRouter({
  routes: [
    { path: '/foo', component: Tab},
    { path: '/bar', component: Speak},
    { path: '/car', component: Shangjia },
    { path: '/dar', component: Detail},


  ]
})


/* eslint-disable no-new */

new Vue({
  el: '#app',
  template: "<App/>",
   router,
  components: {
    App
  }
}).$mount('#app');
