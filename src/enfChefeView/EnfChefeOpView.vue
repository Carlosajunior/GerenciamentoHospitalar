<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div>
      <enf-chefebar 
        :title="'Lista de Pacientes'" 
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>

    <table class="table">
      <thead>
        <th scope="col">Paciente</th>
        <th scope="col">Identificador</th>
        <th scope="col">Prontuário</th>
        <th scope="col">Selecionar</th>
      </thead>

      <tbody v-for="(planeta, index) in response" :key="planeta">
        <enf-chefe-op
          :paciente="planeta.name"
          :id="index"
          :idprontuario="index"
        >
        </enf-chefe-op>
        
      </tbody>
    </table>
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