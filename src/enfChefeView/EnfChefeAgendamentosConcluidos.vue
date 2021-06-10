<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div>
      <enf-chefebar
        :title="'Agendamentos Concluídos'"
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>

    <table class="table">
      <thead>
        <th scope="col">Enfermeiro/Estágiario</th>
        <th scope="col">Nome do paciente</th>
        <th scope="col">Hora da baixa</th>
        <th scope="col">Data da baixa</th>
        <th scope="col">Medicação</th>
      </thead>

      <tbody v-for="planeta in response" :key="planeta">
        <enf-chefe-concluidos
          :enfermeiro="planeta.climate"
          :paciente="planeta.name"
          :horaBaixa="planeta.orbital_period"
          :dataBaixa="planeta.population"
          :medicacao="planeta.gravity"
        >
        </enf-chefe-concluidos>
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefeConcluidos from "../components/enfChefe/EnfChefeConcluidos.vue";
import axios from "axios";
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefeConcluidos },
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
  margin-top: 10%;
  margin-left: 30%;
}


thead {
  background-color: rgb(238, 238, 238);
}

</style>