<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{idEnf}}</th>
        <th scope="col">{{prontuario}}</th>
        <th scope="col">{{hora}}</th>
        <th scope="col">{{data}}</th>
        <th scope="col"><input type="text" v-model="alarmeCad">{{alarme}}</th>
        <th scope="col"><button  @submit.prevent="postForm" type="submit" class="b-salvar">Cadastrar</button></th>
    </tr>

   
</template>

<script>
import enfChefeAlarme from "../../services/enfChefeAlarme"

export default {
    name:"EnfChefePendentes",
    data(){
      return{
         alarmeCad: undefined,
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
    
    async postForm(){
      var cadastroAlarme ={"alarmeCad" : this.alarme}
      var cadastrar = await enfChefeAlarme.post(cadastroAlarme)
      console.log(cadastrar)
      }
    
}
};
</script>

<style>

</style>