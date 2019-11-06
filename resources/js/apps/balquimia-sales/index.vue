<template>
  <div class="sales-cnt-ppal">
     <div class="sales-cnt-interno">

      

        <carousel  :per-page="1" :autoplay="true" :mouse-drag="false" :centerMode="true" :loop="true" :autoplayTimeout="3000" :perPage="5">


          <slide >  
            <div class="sales-slider-lineas-img">
                <img :scr="img01" />   
 
             </div> 
        
          </slide>
        </carousel>

 
  </div>
  </div>
  
</template>


<script>
/*  <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img01" >   </div> </slide> */
import MenuSuperior         from './menu-superior';
import { Carousel, Slide }  from 'vue-carousel';
import { mapGetters }       from 'vuex';


export default {

  mounted() {
      this.$store.dispatch('LineasProductosConsultar');
  },
  data() {
    return {
           img01 : '/storage/balquimia-site/clientes/1.png',
    };
  },
  components : { MenuSuperior, Carousel, Slide },
  computed: {
      ...mapGetters(['LineasProductos']),
  }
};
</script>

