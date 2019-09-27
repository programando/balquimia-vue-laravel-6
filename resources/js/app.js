require('./files/bootstrap');

import Vue              from 'vue';
import router           from './files/routes';
const VueScrollTo = require('vue-scrollto')

Vue.use(VueScrollTo, {
    container: "body",
    duration: 2000,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
})




const app = new Vue({
    el: '#AppVue',
    router,
    VueScrollTo,
});

