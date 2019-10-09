<template>
  <div class="contenedor-principal-balquimia-site">

        <!-- Boton de Ir arriba  -->
        <div class="btn-go-top">
            <span> <i class="fas fa-angle-up"> </i> </span>
        </div>
        <!--  Fin Boton ir arriba -->

    <header class="header">
      <!-- IMG HEADER -->
      <MenuOpciones></MenuOpciones>

      <div class="img-header">
        <div class="welcome">
          <img  class="imgLogo" :src="imgLogo" alt="">
         
          <p>Innovación y desarrollo de productos químicos para amplios sectores de la industria nacional e internacional, con los más altos estándades de calidad y comprometidos con el cuidado y conservación del medio ambiente.</p>
        </div>
      </div>
    </header>
    <!-- IMG HEADER -->

    <main>
      <QuinesSomos></QuinesSomos>
      <ProductosServicios></ProductosServicios>
      <Clientes></Clientes>
    </main>
    <Footer></Footer>
  </div>
</template>


<script>
import MenuOpciones         from "./home-menu";
import QuinesSomos          from "./quienes-somos";
import ProductosServicios   from "./productos-servicios";
import Clientes             from "./clientes";
import Footer               from "./footer";

export default {
    data() {
        return {
              imgLogo : '/storage/balquimia/logo/logo-all-orange.png',
        }
    },
  components: { MenuOpciones, QuinesSomos, ProductosServicios, Clientes, Footer }
};
</script>

<style>
    .img-header {
      background: url("/storage/balquimia-site/header/almacen.jpg");
      opacity: 1;
    }

    .imgLogo {
        width: 450px;
    }

</style>
