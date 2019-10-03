<template>
  <div class="contenedor-principal-balquimia-site">

    <!-- IR ARRIBA -->
    <div class="go-top">
      <span>
        <i class="fas fa-angle-up"></i>
      </span>
    </div>


    <header class='header'> <!-- IMG HEADER -->
            <MenuOpciones></MenuOpciones>
        
        <div class="img-header">
            <div class="welcome">
                <h1>BALQUIMIA S.A.S.</h1>
                <hr>
                <p> Innovación y desarrollo de productos químicos para amplios sectores de la industria nacional e internacional, con los más altos estándades de calidad y comprometidos con el cuidado y conservación del medio ambiente. </p>           
            </div>
        </div>
    </header> <!-- IMG HEADER -->

    <main>      
        <QuinesSomos></QuinesSomos>
        <ProductosServicios></ProductosServicios>
        <Clientes></Clientes>
    </main>

  </div>
</template>


<script>
   import MenuOpciones from './home-menu';
   import QuinesSomos from './quienes-somos';
   import ProductosServicios from './productos-servicios';
   import Clientes      from './clientes';
   
   export default {
       
       components: { MenuOpciones, QuinesSomos, ProductosServicios, Clientes }, 

  };
</script>

<style>
    .img-header {
             background: url("/storage/balquimia-site/header/almacen.jpg");
             opacity: 1;
    }
</style>
