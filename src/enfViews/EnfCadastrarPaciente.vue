<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div>
        <enf-bar :title="'Cadastrar Paciente'">
        </enf-bar>
    </div>
    <div>
        <enf-cad>
        </enf-cad>
    </div>   
 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfCad from '../components/enf/EnfCad.vue'
export default {
    components:{EnfMenu, EnfBar, EnfCad} 
}
</script>

<style>

</style>