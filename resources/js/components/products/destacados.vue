<template >

  <div class="cnt-sales-destacados">
      <div><h1>Productos destacados</h1></div>

      <div>
          {{ MasVendidosUltimosSeisMeses }}
      </div>

  </div>

</template>



<script>
    import  {   mapGetters  } from 'vuex';
   export default {


     mounted() {
        this.$store.dispatch('masVendidosUltimosSeisMeses');
     },
     data() {
       return {
          Productos : [],
       }
     },

     computed: {
       ...mapGetters(['MasVendidosUltimosSeisMeses']),
     }

   }
</script>

