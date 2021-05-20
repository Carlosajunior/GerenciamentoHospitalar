<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div>
      <enf-chefebar :title="'Lista de Pacientes'" kindUser="Enfermeiro Chefe"> </enf-chefebar>
    </div>
    <enf-chefe-paciente> </enf-chefe-paciente>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefePaciente from "../components/enfChefe/EnfChefePaciente.vue";
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefePaciente },
};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>