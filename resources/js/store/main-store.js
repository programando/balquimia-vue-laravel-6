import Vue                  from 'vue';
import Vuex                 from 'vuex';
import LineasProductos      from './modules/LineasProductos';
import Productos            from './modules/Productos';

Vue.use( Vuex );
export default  new Vuex.Store ({

    state       : { },
    mutations   : { },
    getters     : {},
    actions     : {},

    modules : {
        LineasProductos, Productos
    }


});
