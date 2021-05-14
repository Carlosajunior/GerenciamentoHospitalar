<template>
    <div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Relatório de Profissionais'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
        <enf-chefe-rela>
        </enf-chefe-rela>   
 </div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/enfChefe/EnfChefebar.vue'
import EnfChefeRela from '../components/enfChefe/EnfChefeRela.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeRela} 
}
</script>

<style>
   .formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>