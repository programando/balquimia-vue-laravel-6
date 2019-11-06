
const LineasProductos = {
       LineasProductos : [],
}

const    actions = {
        LineasProductosConsultar( { commit }) {
            axios
                .get('/lineas/activas')
                .then( response => {
                       commit('setLineasProductos', response.data );      
                })
                .catch ( error  => {
                    console.log("Error de axios" + error );
                })
        }
    }

const   mutations = {
        setLineasProductos( state, LineasPrd ) {
            state.LineasProductos =   LineasPrd ;
        }
    }

const getters = {
        LineasProductos ( state ) {
            return JSON.parse( JSON.stringify( state.LineasProductos )) ;
        }
    }
 
 
export default {
    state : LineasProductos,
    mutations,
    actions ,
    getters
}

 