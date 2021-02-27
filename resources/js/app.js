import Vue from "vue";
import App from "./App.vue";
import router from './router.js'
import store from './store.js'
import BootstrapVue from "bootstrap-vue";
import VueSweetalert2 from "vue-sweetalert2";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "sweetalert2/dist/sweetalert2.min.css";

Vue.use(BootstrapVue);
Vue.use(VueSweetalert2);

const app = new Vue({
    el: '#dw',
    router,
    store,
    components: { App },
    render: h => h(App)
});