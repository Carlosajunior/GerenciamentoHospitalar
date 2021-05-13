<template>
  <div class="formulario">
    <div>
      <estag-menu> </estag-menu>
    </div>
    <div>
      <estag-bar> </estag-bar>
    </div>
    <div>
      <estag-medicamentos> </estag-medicamentos>
    </div>
  </div>
</template>

<script>
import  EstagMenu from "../components/estag/EstagMenu.vue";
import  EstagBar from "../components/estag/EstagBar.vue";
import  EstagMedicamentos from '../components/estag/EstagMedicamentos.vue'
export default {
    components:{EstagMenu, EstagBar, EstagMedicamentos} 
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>