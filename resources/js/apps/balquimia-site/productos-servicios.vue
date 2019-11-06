<template>

  <section class="site-prd-srv-container">
    
    <div class='info-container'>
      
    <h1>Productos y Servicios</h1>
    <p>
      Contamos con un departamento especializado en investigación y desarrollo de nuevos productos para los diferentes sectores del mercado industrial, ofreciendo alta calidad, eficiencia y durabilidad.
      <br />En Balquimias S.A.S. contamos con un equipo de profesionales idóneos, orientados a la asesoría técnica de postventa, que garantizan la óptima implementación y el manejo eficiente de nuestros productos.
      <br />
      <br />A continuación puede consultar detalles de cada una de nuestras líneas:
    </p>
 
    <LineasProductos/>

    </div>
    
  </section> <!-- site-prd-srv-container -->
 
</template>


<script>
import LineasProductos    from './../../components/lineas/card-linea';
export default {
  data() {
    return {
    };
  },
  components : { LineasProductos }
};
</script>
 