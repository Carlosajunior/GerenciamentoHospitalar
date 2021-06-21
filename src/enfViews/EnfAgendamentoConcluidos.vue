<template>
  <div class="formulario">
    <div>
      <enf-menu> </enf-menu>
    </div>
    <div>
      <enf-bar
        :title="'Agendamentos Concluidos'"
        kindUser="Enfermeiro"
      >
      </enf-bar>
    </div>
    
    <table class="table">
      <thead>
        <th scope="col">Identificador do Paciente</th>
        <th scope="col">Medicação</th>
        <th scope="col">Dosagem</th>
        <th scope="col">Quarto</th>
        <th scope="col">Data</th>
      </thead>

      <tbody v-for="agendamentos in response" :key="agendamentos" >
          <enf-agendamentos-concluidos-cell :id="'00'" :medicacao="'Paracetamol'" 
          :dosagem="'12'" :quarto="'A2'" :data="'A de hoje seu merda'" />
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfMenu from "../components/enf/EnfMenu.vue";
import EnfBar from '../components/adm/AdmBar.vue'
import EnfAgendamentosConcluidosCell from '../components/enf/EnfAgendamentosConcluidosCell'
import axios from 'axios';
export default {
  name : 'EnfAgendamentoConcluido',
  components: { EnfMenu, EnfBar,EnfAgendamentosConcluidosCell },
  data() {
    return{
      response : null
    }
  },
  created() {
        axios({
            method: "GET",
            url: "https://swapi.dev/api/people",
        }).then(
            (result) => {
                this.response = result.data;
                console.log("Não deu erro!");
                console.log(this.response.results);
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

#date {
  display: inline;
}
</style>