<template>

    <div class="formulario">
        <div><enf-chefe-menu>
        </enf-chefe-menu>
        </div>
        
    
        <enf-chefebar :title="'Iniciar Prontuário'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    
    <tbody v-for="planeta in response" :key="planeta">
        <enf-chefe-pro-cad :cids="planeta.name">
        </enf-chefe-pro-cad>
    </tbody>
    </div>
 
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefeProCad from '../components/enfChefe/EnfChefeProCad.vue'
import axios from "axios";
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeProCad},
 data() {
    return {
      response: {},
    };
  },
    created() {
    axios({ method: "GET", url: " https://swapi.dev/api/planets/" }).then(
      (result) => {
        this.response = result.data.results;
        console.log("Não deu erro!");
        console.log(this.response);
      },
      (error) => {
        console.log("Erro");
        console.error(error);
      }
    );
}
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

</style>