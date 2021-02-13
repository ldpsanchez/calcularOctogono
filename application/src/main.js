import Vue from 'vue'
import App from './App.vue'
import Axios from 'axios';
import vuetify from './plugins/vuetify';
import VueKatex from 'vue-katex';
import 'katex/dist/katex.min.css';


Vue.config.productionTip = false

// Importando libreria globalmente
Vue.prototype.$http = Axios;
Vue.use(VueKatex);

new Vue({
  vuetify,
  render: h => h(App)
}).$mount('#app')
