import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

Vue.config.productionTip = false

new Vue({
  router, 
  store,  // ここにVuexStoreを設定
  render: h => h(App),
}).$mount('#app')
