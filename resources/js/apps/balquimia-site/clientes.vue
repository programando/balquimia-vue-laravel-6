<template>
   <section class="contenedor-clientes">  
      <div class="info-container">
        <h1>Nuestros Clientes</h1>
        
        <p> Estas son algunas de las empresas que durante años han confiado en nuestro profesionalismo y calidad de los prductos que fabricamos:  </p>

        <carousel  :per-page="1" :autoplay="true" :mouse-drag="false" :centerMode="true" :loop="true" :autoplayTimeout="3000" :perPage="5">
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img01" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img02" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img03" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img04" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img05" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img06" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img07" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img08" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img09" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img10" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img11" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img12" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img13" >   </div> </slide>
          <slide>  <div class="VueCarousel-slide site-slider-clientes-img"><img :src="img14" >   </div> </slide>
      </carousel>
      <span id="clientes"></span>
        
      </div>
    </section>
   

  
</template>


<script>
  import { Carousel, Slide } from 'vue-carousel';
 
   
   export default {
        data() {
            return {
                    img01 : '/storage/balquimia-site/clientes/1.png',
                    img02 : '/storage/balquimia-site/clientes/2.png',
                    img03 : '/storage/balquimia-site/clientes/3.png',
                    img04 : '/storage/balquimia-site/clientes/4.png',
                    img05 : '/storage/balquimia-site/clientes/5.png',
                    img06 : '/storage/balquimia-site/clientes/6.png',
                    img07 : '/storage/balquimia-site/clientes/7.png',
                    img08 : '/storage/balquimia-site/clientes/8.png',
                    img09 : '/storage/balquimia-site/clientes/9.png',
                    img10 : '/storage/balquimia-site/clientes/10.png',
                    img11 : '/storage/balquimia-site/clientes/11.png',
                    img12 : '/storage/balquimia-site/clientes/12.png',
                    img13 : '/storage/balquimia-site/clientes/13.png',
                    img14 : '/storage/balquimia-site/clientes/14.png',
            }
        },
       components: { Carousel, Slide }, 

  };
</script>