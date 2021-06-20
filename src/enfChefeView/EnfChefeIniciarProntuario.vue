<template>

    <div class="formulario">
        <div><enf-chefe-menu>
        </enf-chefe-menu>
        </div>
        
    <div>
 <enf-chefebar :title="'Iniciar Prontuário'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
       
    <div style="margin-top:18%">
        <enf-chefe-pro-cad>
        </enf-chefe-pro-cad>
        </div>
    </div>
 
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefeProCad from '../components/enfChefe/EnfChefeProCad.vue'

export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeProCad},
    name : "EnfChefeIniciarProntuario"

}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

</style>