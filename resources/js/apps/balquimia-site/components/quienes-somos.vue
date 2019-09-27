<template>
  <div class="container">

    <section class="quienes-somos">
       <span id="quienesSomos"></span>
      <div class="info-container">
        <h1>¿ Quiénes Somos ?</h1>
        
        <p> Balquimias S.A.S. es una empresa colombiana con experiencia en el mercado industrial. Desarrollamos y fabricamos productos de la más alta calidad, con el propósito de brindar las mejores soluciones en limpieza, desinfección y mantenimiento industrial, en sectores como el alimentario, artes gráficas, industrial, sanidad portátil, materias primas para los industriales del aseo y del reencauche. <br> 
        Nuestra misión es solucionar los requerimientos específicos de cada sector, ofreciéndoles los productos más adecuados y especializados, elaborados de acuerdo a las necesidades específicas de cada sector. <br> 
        Dentro de nuestros productos podrá encontrar:<br>
        Detergentes, desinfectantes, desengrasantes, desoxidantes, dieléctricos, desincrustantes, removedores de tintas, desmoldantes, despercudidores, abrillantadores y ceras de varios tipos, entre otros</p>
        
        <div class="about-galery"></div>
      </div>
    </section>
   

  </div>
</template>


<script>
   import MenuOpciones from './home-menu';
   import QuinesSomos from './quienes-somos';
   import ProductosServicios from './productos-servicios';
   
   export default {
       
       components: { MenuOpciones, QuinesSomos, ProductosServicios }, 

  };
</script>