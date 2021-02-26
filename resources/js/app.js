import Vue from "vue";
import App from "./App.vue";
import router from './router.js'
import store from './store.js'


const app = new Vue({
    el: '#dw',
    router,
    store,
    components: { App },
    render: h => h(App)
});