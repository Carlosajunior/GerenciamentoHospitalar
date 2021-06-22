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
        <th scope="col">Identificador do paciente</th>
        <th scope="col">Data da baixa</th>
        <th scope="col">Medicação</th>
        <th scope="col">Posologia</th>
      </thead>

      <tbody v-for="planeta in response" :key="planeta">
        <enf-chefe-concluidos
          :enfermeiro="planeta.aplicador"
          :paciente="planeta.nome"
          :dataBaixa="planeta.data"
          :medicacao="planeta.medicamento"
          :posologia ="planeta.posologia"
        >
        </enf-chefe-concluidos>
      </tbody>
      <div v-show="view">
        <div class="alert alert-danger" role="alert">
            Algo aconteceu, verifique sua conexão!
        </div>
      </div>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefeConcluidos from "../components/enfChefe/EnfChefeConcluidos.vue";
import enfChefeServices from '../services/enfChefeServices';

export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefeConcluidos },
  data() {
    return {
      response: {},
      view : false
    };
  },
  methods:{
    async agendamentosConcluidos(){
        var result;
        try{
          result = await enfChefeServices.agendamentosConcluidos();
          console.log(this.response);
          this.response = result.data;
          console.log(this.response);
        }
        catch(result){
          this.view = true;
        }
    }
  },
  created() {
    this.agendamentosConcluidos();
  },
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