<template>
  
  <div class="container">
     <nav class="menu">
        <div class="logo-box">
           <img  class="logo-menu" :src="imgLogo" alt="">
        </div>

      <div class="list-container">
        <ul class="lists">
         
          <li><a class="activo" v-scroll-to="'#quienesSomos'">¿Quiénes somos?</a> </li>
            <li><a  v-scroll-to="'#productosServicios'">Productos y Servicios</a>     </li> 
            <li><a v-scroll-to="'#clientes'">Nuestros Clientes</a></li>
            <li>
            
             <router-link :to="{name:'sales-index'}" >     Tienda Virtual   </router-link>    
            </li>
            <li><a href="#">E.R.P. Balquimia</a></li>
            <li><a href="#">Contáctenos</a></li>
          
        </ul>
      </div>
    </nav>

  </div>

</template>

<script>
 
export default {
    data() {
        return {
              imgLogo : '/storage/balquimia/logo/logo-all-orange.png',
        }
    },
   
};
</script>

