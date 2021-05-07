<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar>
        </enf-chefebar>
    </div>
    <div>
        <enf-chefe-prontuario>
        </enf-chefe-prontuario>
    </div>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/enfChefe/EnfChefebar.vue'
import EnfChefeProntuario from '../components/enfChefe/EnfChefeProntuario.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeProntuario} 
};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>