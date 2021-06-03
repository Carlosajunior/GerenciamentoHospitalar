<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div id ="main-content">
        <enf-bar 
            :title="'Cadastrar Paciente'" 
        >
        </enf-bar>
    </div>
    <div>
        <enf-chefe-cad/>
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
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}
</style>