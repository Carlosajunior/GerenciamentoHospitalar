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
        <th scope="col">Identificador do paciente</th>
        <th scope="col">Prontuário</th>
        <th scope="col">Selecionar</th>
      </thead>

      <tbody v-for="(planeta, index) in response" :key="planeta">
        <enf-chefe-paciente
          :paciente="planeta.name"
          :id="index"
          :idprontuario="index"
          :index="index"
        >
        </enf-chefe-paciente>
        
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefePaciente from "../components/enfChefe/EnfChefePaciente.vue";

import axios from "axios";
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefePaciente },
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
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
.filtro {
  padding: 2%;
}
button {
  border: none;
  background-color: #2ba9f1;
  color: white;
  padding: 4px;
  border-radius: 3px;

}
label {
  margin-right: 1%;
}
thead{
  background-color: rgb(238, 238, 238);
}

#text {
  display: inline;
}
</style>