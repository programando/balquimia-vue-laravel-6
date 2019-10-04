<template>

  <section class="site-prd-srv-container">
    <div class='info-container'>
    <span id="productosServicios"></span>
    
    <h1>Productos y Servicios</h1>
    <p>
      Contamos con un departamento especializado en investigación y desarrollo de nuevos productos para los diferentes sectores del mercado industrial, ofreciendo alta calidad, eficiencia y durabilidad.
      <br />En Balquimias S.A.S. contamos con un equipo de profesionales idóneos, orientados a la asesoría técnica de postventa, que garantizan la óptima implementación y el manejo eficiente de nuestros productos.
      <br />
      <br />A continuación puede consultar detalles de cada una de nuestras líneas:
    </p>

    <div class="contenedor-tarjetas">

      <div class="item-1">
        <div class="card">
          <div class="thumb1"></div>
          <article>
            <h1>ALIMENTARIA</h1>
            <p>Línea de productos químicos especializados para limpieza y desinfección en la industria alimentaría. Lavado completo de instalaciones incluyendo equipos e implementos.</p>

            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

      <div class="item-1">
        <div class="card">
          <div class="thumb2"></div>
          <article>
            <h1>ARTES GRÁFICAS</h1>
            <p>
              Limpiadores especializados de rodillos y mantillas, útiles para remover rápido y fácil tintas de la batería de las maquinas offset de lavado automático o manual, utilizadas en la industria litográfica.
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

      <div class="item-1">
        <div class="card">
          <div class="thumb3"></div>
          <article>
            <h1>AUTOMOTRIZ</h1>
            <p>
                Diseñados para lavar externamente cualquier tipo de vehículo (carros,camiones, buses y demás ) sin contaminar el medio ambiente.
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

      <div class="item-1">
        <div class="card">
          <div class="thumb4"></div>
          <article>
            <h1>HOTELERA</h1>
            <p>
                Limpieza y desinfección con aromas perdurables
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

      <div class="item-1">
        <div class="card">
          <div class="thumb5"></div>
          <article>
            <h1>MANT. INDUSTRIAL</h1>
            <p>
                Ideales para la remoción profunda y fácil de grasas inorgánicas maquinadas, crudo de castilla, full Oil, negro de humo y diversas suciedades adheridas a herramientas, piezas mecánicas, tuberías, tanques, pisos o diversas superficies en ambientes industriales muy exigentes.
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>


      <div class="item-1">
        <div class="card">
          <div class="thumb6"></div>
          <article>
            <h1>MATERIAS PRIMAS</h1>
            <p>
                Variedad de productos químicos especializados que pueden ser incorporados como materias primas en la fabricación de productos de aseo.
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

      <div class="item-1">
        <div class="card">
          <div class="thumb7"></div>
          <article>
            <h1>SANIDAD PORTÁTIL</h1>
            <p>
                Línea de productos químicos especializados para mantenimiento de baños portátiles.
              </p>
            <span>
              <a href>Ver productos...</a>
            </span>
          </article>
        </div>
      </div>

 
 

    </div> <!--Contenedor-tarjetas -->
    </div>
    
  </section> <!-- site-prd-srv-container -->
 
</template>


<script>
export default {
  data() {
    return {
    };
  }
};
</script>
<style>
  .thumb1 {  background-image: url("/storage/balquimia-site/lineas/alimentaria.jpg"); }
  .thumb2 {  background-image: url("/storage/balquimia-site/lineas/artes-graficas.jpg"); }
  .thumb3 {  background-image: url("/storage/balquimia-site/lineas/automotriz.jpg"); }
  .thumb4 {  background-image: url("/storage/balquimia-site/lineas/hotelera.jpg"); }
  .thumb5 {  background-image: url("/storage/balquimia-site/lineas/industrial.jpg"); }
  .thumb6 {  background-image: url("/storage/balquimia-site/lineas/materias-primas.jpg"); }
  .thumb7 {  background-image: url("/storage/balquimia-site/lineas/sanidad-portatil.jpg"); }
</style>