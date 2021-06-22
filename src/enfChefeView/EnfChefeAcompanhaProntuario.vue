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
      <enf-chefe-agendamento-cad/>
    </div>
      <table class="table">
      <thead>
    <tr>
        <th scope="col">Nome do paciente</th>
        <th scope="col">ID do prontuário</th>
        <th scope="col">Status da baixa</th>
        <th scope="col">Cadastrar Agendamento</th>
        <th scope="col">Baixa prontuário</th>
        
    </tr>
 </thead>

      <tbody v-for="planeta in response" :key="planeta">
          <enf-chefe-prontuario
          :paciente="planeta.name"
          :idProntuario="planeta.id_prontuario"
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
        this.response = result 
      }
      catch(result){
        this.view2 = true;
      }
    }
  },
  created() {
   
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