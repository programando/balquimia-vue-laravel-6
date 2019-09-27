<template>
  <div class="site-prd-srv-container">
    <span id="productosServicios"></span>
    <h1>Productos y Servicios</h1>
    <p>
      Contamos con un departamento especializado en investigación y desarrollo de nuevos productos para los diferentes sectores del mercado industrial, ofreciendo alta calidad, eficiencia y durabilidad.
      <br />En Balquimias S.A.S. contamos con un equipo de profesionales idóneos, orientados a la asesoría técnica de postventa, que garantizan la óptima implementación y el manejo eficiente de nuestros productos.
      <br />
      <br />A continuación puede consultar detalles de cada una de nuestras líneas:
    </p>

    <div class="site-prd-serv-card-container">
      
        <article class="site-prd-srv">
          <img :src="imgAlimentaria" alt="Línea alimentaria" />
          <div class="site-prd-serv-card">
            <h3>Alimentaria</h3>
            <p>Línea de productos químicos especializados para limpieza y desinfección en la industria alimentaría. Lavado completo de instalaciones incluyendo equipos e implementos.</p>
          </div>
        </article>

        <article class="site-prd-srv">
          <img :src="imgArtesGraficas" alt="Línea artes gráficas" />
          <div class="site-prd-serv-card">
            <h3>Artes gráficas</h3>
            <p>
              Limpiadores especializados de rodillos y mantillas, útiles para remover rápido y fácil tintas de la
              batería de las maquinas offset de lavado automático o manual, utilizadas en la industria
              litográfica; manteniendo estable la dureza y la altura del rodillo, dejándolos opacos sin grasa y
              conservando intacta la imagen de la plancha
            </p>
          </div>
        </article>

        <article class="site-prd-srv">
          <img :src="imgAutomotriz" alt="Línea automotriz" />
          <div class="site-prd-serv-card">
            <h3>Automotriz</h3>
            <p>Diseñados para lavar externamente cualquier tipo de vehículo (carros,camiones, buses y demás ) sin contaminar el medio ambiente.</p>
          </div>
        </article>

        <article class="site-prd-srv">
          <img :src="imgHotelera" alt="Línea hotelera" />
          <div class="site-prd-serv-card">
            <h3>Hotelera</h3>
            <p>Limpieza y desinfección con aromas perdurables</p>
          </div>
        </article>

            <article class="site-prd-srv">
          <img :src="imgHotelera" alt="Línea hotelera" />
          <div class="site-prd-serv-card">
            <h3>Hotelera</h3>
            <p>Limpieza y desinfección con aromas perdurables</p>
          </div>
        </article>
   
      
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      imgAlimentaria: "/storage/balquimia-site/lineas/alimentaria.jpg",
      imgArtesGraficas: "/storage/balquimia-site/lineas/artes-graficas.jpg",
      imgAutomotriz: "/storage/balquimia-site/lineas/automotriz.jpg",
      imgHotelera: "/storage/balquimia-site/lineas/hotelera.jpg"
    };
  }
};
</script>