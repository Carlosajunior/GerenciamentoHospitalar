<template>
  <div class="formulario">
    <div>
      <estag-menu> </estag-menu>
    </div>
    <div>
      <estag-bar> </estag-bar>
    </div>
    <div>
      <estag-rela> </estag-rela>
    </div>
  </div>
</template>

<script>
import  EstagMenu from "../components/estag/EstagMenu.vue";
import  EstagBar from "../components/estag/EstagBar.vue";
import  EstagRela from '../components/estag/EstagRela.vue'
export default {
    components:{EstagMenu, EstagBar, EstagRela} 
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>