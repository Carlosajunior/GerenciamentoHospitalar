<template>
  <div class="formulario">
    <div class="filtro">
      <input id="date" type="date" />
      <button>Filtrar</button>
    </div>
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div id ="main-content">
      <enf-chefebar
        :title="'Relatório de Profissionais'"
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>

    <table class="table">
      <thead>
        <th scope="col">Enfermeiro/Estagiário</th>
        <th scope="col">Estado</th>
        <th scope="col">Agendamento</th>
        <th scope="col">Data</th>
        <th scope="col">Horário</th>
      </thead>

      <tbody v-for="planeta in response" :key="planeta">
        <enf-chefe-rela
          :enfermeiro="planeta.climate"
          :estado="planeta.name"
          :hora="planeta.orbital_period"
          :data="planeta.population"
          :agendamento="planeta.gravity"
        >
        </enf-chefe-rela>
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefeRela from "../components/enfChefe/EnfChefeRela.vue";
import axios from "axios";
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefeRela },
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
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}

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
  background-color: #35b736;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}
thead{
  background-color: rgb(238, 238, 238);
}
</style>