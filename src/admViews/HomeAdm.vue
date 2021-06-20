<template>
  <div class="color">
    <input type="checkbox" id="nav-toggle" />

    <adm-menu> </adm-menu>
    <div id="main-content">
      <adm-bar> </adm-bar>

      <img class="img-fluid" src="../assets/enfCapa.jpg" />
    </div>
  </div>
</template>

<script>
import AdmBar from "../components/adm/AdmBar.vue";
import AdmMenu from "../components/adm/AdmMenu.vue";
export default {
  name: "HomeAdm",
  components: {
    AdmMenu,
    AdmBar,
  },
  mounted() {
    if (sessionStorage.user) {
      console.log(sessionStorage.user);
    }
  },
};
</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
}
.img-fluid {
  padding: 10%;
}
main {
  margin-top: 85px;
  padding: 1.5rem 1.5rem;
  min-height: calc(100vh - 90px);
}

.color {
  background: white;
}
</style>