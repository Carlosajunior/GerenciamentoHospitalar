<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{idProntuario}}</th>
        <th scope="col"> <select v-model="status">
          <option disabled value="">Status da baixa:</option>
          <option value=1>Alta</option>
          <option value=2>Obito</option>
        </select></th>
        <th scope="col"> <button @click="editar" class="btn btn-success">Cadastrar </button> </th>
        <th scope="col"> <button @click="baixar" class="btn btn-primary"> Dar baixa </button> </th>
        
    </tr>

   
</template>

<script>
import enfChefeProntuario from "../../services/enfChefeProntuario"
export default {
    name:"EnfChefeProntuario",
    props:{
      paciente:null,
      idProntuario : null,
  
    },
     data(){
    return{
    status : '',
    }
  },
  
  
     methods:{
        editar(){
          if(this.prontuario== this.idprontuario){
            this.$router.push("../enfChefeView/EnfChefeOpView")
          }
        },
          baixar(){
          if(this.status != ''){
            var cadastroUser ={"status" : this.status}
            var cadastrar = enfChefeProntuario.post(cadastroUser)
            console.log(cadastrar)
          }
          },
          exibir(){
            var prontuario = this.idProntuario;
          if(prontuario == this.idProntuario){
            this.$router.push("../enfChefeView/EnfChefeOpView")
          }
          }
}
}

</script>

<style>
label {
  margin-right: 1%;
}
.filtro {
  padding: 2%;
}
button {
  border: none;
  background-color: #2BA9F1;
  color: white;
  padding: 3.2px;
}

th {
  padding: 10px;
  text-align: center;
}
th[scope="col"] {
  background-color: rgb(238, 238, 238);
}

#text {
  display: inline;
}
</style>