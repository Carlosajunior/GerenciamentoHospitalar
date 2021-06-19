<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{idEnf}}</th>
        <th scope="col"><input type="text" class="enfcad" v-model="enfCad"></th>
        <th scope="col"><button   @click="cadastrarEnf" type="submit" class="b-salvar">Cadastrar</button></th>
        <th scope="col">{{prontuario}}</th>
        <th scope="col">{{hora}}</th>
        <th scope="col">{{data}}</th>
        <th scope="col"><input class="alarme" type="text" v-model="alarmeCad">{{alarme}}</th>
        <th scope="col"><button  @click="cadAlarme" type="submit" class="b-salvar">Cadastrar</button></th>
    </tr>

   
</template>

<script>
import enfChefeAlarme from "../../services/enfChefeAlarme"
import enfChefeCadEnfAgendamento from "../../services/enfChefeCadEnfAgendamento"
export default {
    name:"EnfChefePendentes",
    data(){
      return{
         alarmeCad: undefined,
         enfCad:undefined
      }
    },
    props:{
      paciente:null,
      idEnf : null,
      prontuario: null,
      hora:null,
      data:null,
      alarme:null,      
    },
    methods:{
    
    async cadAlarme(){
      var cadastroAlarme ={"alarmeCad" : this.alarmeCad}
      var cadastrar = await enfChefeAlarme.post(cadastroAlarme)
      console.log(cadastrar)
      console.log("Não deu erro! alarme cad");
      },
    async cadastrarEnf(){
      var  cadastroEnfAgendamento={"enfCad" : this.endCad}
      var cadastrar = await enfChefeCadEnfAgendamento.post(cadastroEnfAgendamento)
      console.log(cadastrar)
      console.log("Não deu erro! enf cad");
      }
    
}
};
</script>

<style>
.enfcad{
  width: 90%;
}
.alarme{
width: 100%;
}

.b-salvar{
  background: #2ba9f1;
}

button {
  display: inline-block;
  border: none;
  padding: 4px;
  color: white;
  border-radius: 5px;
}
</style>