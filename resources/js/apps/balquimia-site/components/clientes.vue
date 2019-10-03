<template>


    <section class="clientes">
       <span id="clientes"></span>
      <div class="info-container">
        <h1>Nuestros Clientes</h1>
        
        <p> Estas son algunas de las empresas que durante años han confiado en nuestro profesionalismo y calidad de nuestros productos:  </p>

        <carousel :per-page="1" :autoplay="true" :mouse-drag="false" :centerMode="true" :loop="true" :autoplayTimeout="2500" :perPage="5">
        <slide>  Slide 1 Content </slide>
        <slide>  Slide 2 Content </slide>
        <slide>  Slide 3 Content </slide>
        <slide>  Slide 4 Content </slide>
        <slide>  Slide 5 Content </slide>
        <slide>  Slide 6 Content </slide>
        <slide>  Slide 7 Content </slide>
        <slide>  Slide 8 Content </slide>
        <slide>  Slide 9 Content </slide>
        <slide>  Slide 10 Content </slide>
        <slide>  Slide 11 Content </slide>
        <slide>  Slide 12 Content </slide>
        <slide>  Slide 13 Content </slide>
  </carousel>

        
      </div>
    </section>
   

  
</template>


<script>
  import { Carousel, Slide } from 'vue-carousel';
 
   
   export default {
       
       components: { Carousel, Slide }, 

  };
</script>