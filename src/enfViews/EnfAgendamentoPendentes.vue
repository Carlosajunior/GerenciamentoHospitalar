<template>
<div class="formulario">
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div id ="main-content">
        <enf-bar
            :title="'Agendamentos Pendentes'"
            kindUser="Enfermeiro"
        >
        </enf-bar>
    </div>
        <table class="table">
            <thead>
            <th scope="col">Nome do paciente</th>
            <th scope="col">Data</th>
            <th scope ="col"> Medicamento </th>
            </thead>

        <tbody>

        <enf-pendentes v-on:Erro="visualizar"/>

        </tbody>
        </table>

    <div class="alert alert-danger" role="alert" v-show="view">
        Não foi possível baixar o agendamento
    </div>

    
    <div>
       
    </div>
</div> 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfPendentes from '../components/enf/EnfPendentes.vue'
import enfermeiroServices from '../services/enfermeiroServices.js'
export default {
    components:{EnfMenu, EnfBar,EnfPendentes},
    name: "EnfAgendamentoPendentes",
    data(){
        return {
            view : false,
            response : null
        }
    },
    methods: {
        visualizar(){
            this.view = true;
        },

        async getAgendamento (){
            var data = {"id_usuario" : sessionStorage.getItem('id_usuario')}
            var result;
            try{
                result =  await enfermeiroServices.agendamentoPendentes(data);
                this.response = result;
                }
            catch(result){
                this.view = true;
            }
                }
            },
   created() {
       this.getAgendamento
  },
}
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