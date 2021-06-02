<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div id ="main-content">
        <enf-bar 
            :title="'Cadastrar Paciente'" 
            kindUser="Enfermeiro"
        >
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
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}
</style>