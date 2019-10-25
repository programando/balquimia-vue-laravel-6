<template>
  <div class="sales-cnt-ppal">
    <nav class="sales-cnt-menu">
      <div class="sales-menu-logo">
        <img class="sales-menu-logo-img" :src="imgLogo" alt />
      </div>

      <form>
        <input type="search" placeholder="¿ Qué producto buscas ?" />
      </form>

      <div class="sales-list-container">
        <ul class="sales-lists">
          <li>
            <a class="sales-activo">
              <div class="sales-menu-icono">
                <i class="fas fa-user-friends"></i>
              </div>
              <div>Mi Cuenta</div>
            </a>
          </li>

          <li>
            <a>
              <div class="sales-menu-icono">
                <i class="fas fa-shipping-fast"></i>
              </div>
              <div>Mis Pedidos</div>
            </a>
          </li>

          <li>
            <a>
              <div class="sales-menu-icono">
                <i class="fas fa-shopping-basket"></i>
              </div>
              <div>Mi Compra</div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>


<script>
export default {
  data() {
    return {
      imgLogo: "/storage/balquimia/logo/logo-all-orange.png"
    };
  }
};
</script>

