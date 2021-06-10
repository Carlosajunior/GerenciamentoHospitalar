<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div>
      <enf-chefebar 
        :title="'Prontuário'" 
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>
 
      <tbody v-for="(planeta, index) in response" :key="planeta">
        <enf-chefe-op
          :paciente="planeta.name"
          :enfermeiro="planeta.name"
          :cid="index"
          :posologia="planeta.name"
          :quarto="planeta.name"
        >
        </enf-chefe-op>
        
      </tbody>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefeOp from "../components/enfChefe/EnfChefeOp.vue";

import axios from "axios";
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefeOp },
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
  },
};
</script>

<style>
 tbody{
  padding: 50%;
}
</style>