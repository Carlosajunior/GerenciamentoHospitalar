<template>
<div>

    <div>
        <enf-chefe-menu >
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Cadastrar Paciente'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
    <div style="margin-top:10%">
        <enf-chefe-cad >
        </enf-chefe-cad>
    </div>   
 </div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefeCad from '../components/enfChefe/EnfChefeCad.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeCad} 
}
</script>

<style>

</style>