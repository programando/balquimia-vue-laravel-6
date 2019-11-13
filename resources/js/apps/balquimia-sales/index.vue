<template>
  <div class="sales-cnt-ppal">
     <div class="sales-cnt-interno">

       <MenuSuperior></MenuSuperior>
       <LineasProductosSliders></LineasProductosSliders>
       <ProductosDestacados></ProductosDestacados>

  </div>
  </div>

</template>


<script>
/*  <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img01" >   </div> </slide> */
import { Carousel, Slide }    from 'vue-carousel';
import { mapGetters }         from 'vuex';

import MenuSuperior           from './menu-superior';
import LineasProductosSliders from './../../components/lineas/card-linea-slide';
import ProductosDestacados    from './../../components/products/destacados';

export default {

  mounted() {
      this.$store.dispatch('LineasProductosConsultar');
  },

  components : { MenuSuperior, Carousel, Slide, LineasProductosSliders, ProductosDestacados },

  computed: {
      ...mapGetters(['LineasProductos']),
    }

};


</script>

