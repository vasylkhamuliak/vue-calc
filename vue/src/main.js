import Vue from 'vue'
import App from './components/App.vue'
import Test from './components/Test.vue'

new Vue({
  el: '#app',
  render: h => h(App)
})

Vue.component('app-test', Test)
