<template>

  <div class="cards-container">
      <div v-for="Linea in LineasProductos" :key="Linea.id_linea" class="card" >     
        <div class="card-image" :style="{ backgroundImage: `url('${Linea.image_path}')` }"></div>
        <article>
          <h1> {{ Linea.nom_linea }} </h1>
          <p>{{ Linea.dscrpcion_linea }}</p>
          <span>
            <a href>Ver productos...   </a>
          </span>
        </article>
      </div>

  </div>
  
</template>

<script>
    import  {   mapGetters  } from 'vuex';

    export default {
       created() {
          this.$store.dispatch('LineasProductosConsultar');
      },

      computed: { 
          ...mapGetters ( ['LineasProductos']), 
      }
    };

</script>

 