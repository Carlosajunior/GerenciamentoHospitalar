<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Acompanhar Prontuário'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
    <div v-show="view">
      <enf-chefe-agendamento-cad style="margin-top:10%"/>
    </div>
      <table class="table" v-show="!view">
      <thead>
    <tr>
        <th scope="col">Nome do paciente</th>
        <th scope="col">Número do Quarto</th>
        <th scope="col">Cód. CID</th>
        <th scope="col">Cadastrar Agendamento</th>
        <th scope="col">Baixa prontuário</th>
        
    </tr>
 </thead>

      <tbody v-for="paciente in response" :key="paciente">
          <enf-chefe-prontuario
          :paciente="paciente.nome"
          :idProntuario="paciente.id"
          :CID='paciente.CID'
          :numeroQuarto='paciente.numeroQuarto'
          v-on:Cadastrar="agendamento" >
        </enf-chefe-prontuario>
      </tbody>
    </table>

  <div class="alert alert-danger" role="alert" v-show="view2">
    Não foi possível fazer o agendamento tente mais tarde!
</div>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefeProntuario from '../components/enfChefe/EnfChefeProntuario.vue'
import EnfChefeAgendamentoCad from "../components/enfChefe/EnfChefeAgendamentoCad.vue"
import enfChefeServices from '../services/enfChefeServices.js'

export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeProntuario,EnfChefeAgendamentoCad},
data() {
    return {
      response: {},
      view : false,
      view2 : false
    };
  },

  methods:{
    agendamento(){
      this.view = true;
    },
    async acompanharProntuario(){
      var result;
      try{
        result = await enfChefeServices.acompanharProntuario();
        this.response = result.data;
        console.log(this.response);
      }
      catch(result){
        this.view2 = true;
      }
    },

  },
  created() {
    this.acompanharProntuario();
  }

};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>