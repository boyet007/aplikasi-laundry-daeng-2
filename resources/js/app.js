import Vue from "vue";
import App from "./App.vue";
import router from './router.js'
import store from './store.js'
import BootstrapVue from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.use(BootstrapVue);


const app = new Vue({
    el: '#dw',
    router,
    store,
    components: { App },
    render: h => h(App)
});