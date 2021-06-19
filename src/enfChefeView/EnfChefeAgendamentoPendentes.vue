<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Agendamentos Pendentes'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
    
    <table class="table">
      <thead>
       <th scope="col">Nome do paciente</th>
        <th scope="col">Enfermeiro/Estagiário</th>
        <th scope="col">Insira o Enfermeiro/Estagiário </th>
        <th scope="col">Aperte</th>
        <th scope="col">Prontuário</th>
        <th scope="col">Horário</th>
        <th scope="col">Data</th>
        <th scope="col">Cadastrar alarme</th>
        <th scope="col">Aperte</th>

      </thead>

      <tbody v-for="planeta in response" :key="planeta">
          <enf-chefe-pendentes
          :paciente="planeta.name"
          :idEnf="planeta.orbital_period"
          :prontuario="planeta.population"
          :hora="planeta.orbital_period"
          :data="planeta.population"
            :alarme="planeta.gravity"
             >
        </enf-chefe-pendentes>
      </tbody>
    </table>
</div> 
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefePendentes from '../components/enfChefe/EnfChefePendentes.vue'
import axios from "axios";

export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefePendentes},
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
};
</script>

<style>

.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

thead {
  background-color: rgb(238, 238, 238);
}
</style>



