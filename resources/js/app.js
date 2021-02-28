import Vue from "vue";
import App from "./App.vue";
import router from './router.js'
import store from './store.js'
import BootstrapVue from "bootstrap-vue";
import VueSweetalert2 from "vue-sweetalert2";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "sweetalert2/dist/sweetalert2.min.css";
import Permissions from './mixins/permission.js';
import { mapActions, mapGetters } from 'vuex';

Vue.use(BootstrapVue);
Vue.use(VueSweetalert2);
Vue.mixin(Permissions);
const app = new Vue({
    el: '#dw',
    router,
    store,
    components: { App },
    computed: {
        ...mapGetters(['isAuth'])
    },
    methods: {
        ...mapActions('user', ['getUserLogin'])
    },
    created() {
        if (this.isAuth) {
            this.getUserLogin() //REQUEST DATA YANG SEDANG LOGIN
        }
    },
    render: h => h(App)
});