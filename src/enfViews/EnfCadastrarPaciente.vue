<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div>
        <enf-bar 
            :title="'Cadastrar Paciente'" 
            kindUser="Enfermeiro">
        </enf-bar>
    </div>
    <div>

        <enf-chefe-cad>
        </enf-chefe-cad>
    </div>   
 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfChefeCad from '../components/enfChefe/EnfChefeCad.vue'
export default {
    components:{EnfMenu, EnfBar,EnfChefeCad} 
}
</script>

<style>

</style>