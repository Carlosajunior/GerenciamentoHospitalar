<template>
  <div class="formulario">
    <div>
      <enf-menu> </enf-menu>
    </div>
    <div id ="main-content">
      <enf-bar
        :title="'Agendamentos Concluídos'"
        kindUser="Enfermeiro"
      > </enf-bar>
    </div>
    <div>
      <enf-concluidos> </enf-concluidos>
    </div>
  </div>
</template>

<script>
import EnfMenu from "../components/enf/EnfMenu.vue";
import EnfBar from '../components/adm/AdmBar.vue'
import EnfConcluidos from "../components/enf/EnfConcluidos.vue";
export default {
  components: { EnfMenu, EnfBar, EnfConcluidos },
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

.formulario #main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}
</style>