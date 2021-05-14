<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Estoque de Medicamentos'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
        <enf-chefe-medicamentos>
        </enf-chefe-medicamentos>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/enfChefe/EnfChefebar.vue'
import EnfChefeMedicamentos from '../components/enfChefe/EnfChefeMedicamentos.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeMedicamentos} 
}
</script>

<style>
   .formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>