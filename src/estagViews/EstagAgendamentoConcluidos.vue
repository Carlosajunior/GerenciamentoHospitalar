<template>
  <div class="formulario">
    <div>
      <estag-menu> </estag-menu>
    </div>
    <div>
      <estag-bar> </estag-bar>
    </div>
    <div>
      <estag-concluidos> </estag-concluidos>
    </div>
  </div>
</template>

<script>
import  EstagMenu from "../components/estag/EstagMenu.vue";
import  EstagBar from "../components/estag/EstagBar.vue";
import  EstagConcluidos from "../components/estag/EstagConcluidos.vue";
export default {
  components: {  EstagMenu,  EstagBar,  EstagConcluidos },
};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>