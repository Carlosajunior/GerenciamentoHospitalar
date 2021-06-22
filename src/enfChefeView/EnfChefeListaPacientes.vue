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
    <div v-show="view">
      <table class="table" style="margin-top:18%">
        <h2> Prontuarios Associados</h2> 
        <enf-chef-op-view :lista="lista3" />
      </table>
    </div>
    <table class="table" v-show="!view">
      <thead>
        <th scope="col">Paciente</th>
        <th scope="col">Identificador do paciente</th>
        <th scope="col">Selecionar</th>
      </thead>

      <tbody v-for="(paciente, index) in lista1" :key="index" >
        <enf-chefe-paciente
          :paciente="paciente.nome"
          :id="paciente.id"
          :Eprontuario="lista2[index]"
          v-on:Prontuarios="showProntuarios"
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
import enfermeiroServices from "../services/enfermeiroServices.js"
import EnfChefOpView from "../components/enfChefe/EnfChefeOpView.vue"
export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefePaciente,EnfChefOpView },
  data() {
    return {
      response: {},
      lista1 : [],
      lista2 : [],
      lista3 : [],
      view : false
    };
  },
  methods:{
    async listar(){
      this.response = (await enfermeiroServices.relatorioPacientes()).data;
      console.log(this.response);
      this.lista1 = this.response[0];
      this.lista2 = this.response[1];
      console.log(this.lista1);
      console.log(this.lista2);
    },
    showProntuarios(obj){
        this.view = true;
        this.lista3 = obj;
    }
  }
  ,
  created() {
    this.listar();
    
      
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