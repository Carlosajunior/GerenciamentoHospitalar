<template>
  <div class="formulario" >
    <div>
      <enf-menu>
      </enf-menu>
    </div>
    <div>
      <enf-bar 
        :title="'Relatório de Pacientes'" 
        kindUser="Enfermeiro"
      >
      </enf-bar>
    </div>

    <table class="table" v-show="!this.view">

      <thead>
        <th scope="col">Data do diagnóstico</th>
        <th scope="col">Cid</th>
        <th scope="col">Data da internação</th>
        <th scope="col"> Número do quarto</th>
        <th scope="col"> Identificador do Paciente </th>
      </thead>

      <tbody >
        <enf-prontuario-cell 
        :data_diagnostico="lista3.data_diagnostico"
        
        :idCid="lista3.idCID"
        :data_internacao="lista3.data_internacao"
        :numero_quarto="lista3.numero_quarto"
        :id_paciente="lista3.id_paciente"
        
        />

      </tbody>

    </table>

    <table class="table"  v-show="this.view">
      <thead>
        <th scope="col">Paciente</th>
        <th scope="col">Identificador</th>
        <th scope="col">Prontuário</th>
      </thead>

      <tbody v-for="(val, index) in lista1" :key="index" >
        <enf-rela
          :paciente="val.nome"
          :id="val.id"
          :prontuario="lista2[index]"
         v-on:ExibirProntEnf="exibir">


        </enf-rela>
      </tbody>
    </table>
  </div>        
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfRela from '../components/enf/EnfRela.vue'
import axios from "axios";
import EnfProntuarioCell from "../components/enf/EnfProntuarioCell.vue"
export default {
    components:{EnfMenu, EnfBar, EnfRela,EnfProntuarioCell},
    data() {
    return {
      response: {},
      lista1 : undefined,
      lista2 : undefined,
      view : true,
      lista3 : []
    };
  },
  methods:{
    exibir(valor){
      console.log('Ola mundo');
      this.view = false;
      this.lista3 = valor;
      console.log(this.lista3)
      
    }
  },
  created() {
    axios({ method: "GET", url: " http://127.0.0.1:8000/RelatorioPacienteEnf" }).then(
      (result) => {
        this.response = result;
        this.lista1 = result.data[0]
        this.lista2 = result.data[1]
        console.log("Não deu erro!");
        console.log(this.response);
        console.log(this.lista1)
        console.log(this.lista2)
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

.formulario #main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}

.filtro {
  padding: 2%;
}

button {
  border: none;
  background-color: #2ba9f1;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
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