
const Productos = {
   Productos : [],
}

const    actions = {
   masVendidosUltimosSeisMeses( { commit }) {
        axios
            .get('/productos/mas-vendidos')
            .then( response => {
                   commit('setMasVendidosUltimosSeisMeses', response.data );
            })
            .catch ( error  => {
                console.log("Error de masVendidosUltimosSeisMeses" + error );
            })
    },


}

const   mutations = {
   setMasVendidosUltimosSeisMeses ( state, Productos ) {
        state.Productos =   Productos ;
    },


}

const getters = {
   MasVendidosUltimosSeisMeses ( state ) {
        return JSON.parse( JSON.stringify( state.Productos )) ;
    },

}


export default {
   state : Productos,
   mutations,
   actions ,
   getters
}

