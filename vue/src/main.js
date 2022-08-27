import Vue from 'vue'
import App from './App.vue'

import { BootstrapVue, BootstrapVueIcons } from "bootstrap-vue";
import VueSweetalert2 from "vue-sweetalert2";

import "sweetalert2/dist/sweetalert2.min.css";

import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.config.productionTip = false;
// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(BootstrapVueIcons);

Vue.use(VueSweetalert2);


new Vue({
  render: h => h(App),
}).$mount('#app')
