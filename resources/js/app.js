require('./files/bootstrap');

import Vue            from 'vue';
import router         from './files/routes';
import store          from './store/main-store'
import VueScrollTo    from './files/vue-scrollto';


const app = new Vue({
    el: '#AppVue',
    router,
    VueScrollTo,
    store
});

