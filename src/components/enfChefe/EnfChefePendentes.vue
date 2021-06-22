<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{popo}}</th>
        <th scope="col"><input type="text" class="enfcad" v-model="enfCad"></th>
        <th scope="col"><button   @click="cadastrarEnf" class="btn btn-success">Cadastrar</button></th>
        <th scope="col">{{medicamento}}</th>
    
        <th scope="col">{{data}}</th>
       
    </tr>

   
</template>

<script>

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
      medicamento: null,
      id : null,
      popo : null,
      data:null,
       
    },
    methods:{
    async cadastrarEnf(){
      var  cadastroEnfAgendamento={"nome":this.enfCad, "id":this.id}
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