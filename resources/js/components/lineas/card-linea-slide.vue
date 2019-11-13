
<template>

      <carousel    :autoplay="true" :mouse-drag="false" :centerMode="true" :loop="true" :autoplayTimeout="3000" :perPage="1">
          <slide v-for="Linea in LineasProductos" :key="Linea.id_linea">
            <div class="VueCarousel-slide sales-slider-lineas-img img">
              <img :src="Linea.slider_path" >
              </div>
          </slide>
      </carousel>

</template>

<script>
    import  {   mapGetters  } from 'vuex';
    import { Carousel, Slide } from 'vue-carousel';

    export default {
       created() {
          this.$store.dispatch('LineasProductosConsultar');
      },
      components : { Carousel,Slide },

      computed: {
          ...mapGetters ( ['LineasProductos']),
      }
    };

</script>

