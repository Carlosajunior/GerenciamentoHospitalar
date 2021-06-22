<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{idProntuario}}</th>
        <th scope="col"> <button @click="cadastrar" class="btn btn-success">Cadastrar </button> </th>
        <th scope="col"> <button @click="baixa" class="btn btn-primary"> Dar baixa </button> </th>
        
    </tr>

   
</template>

<script>
import enfChefeServices from "../../services/enfChefeServices.js"
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
        cadastrar(){
          sessionStorage.setItem("id_prontuario",this.idProntuario);
          this.$emit("Cadastrar");

        },

        async baixa(){
          var data = {"id_usuario" : sessionStorage.getItem("id_usuario"), "tipo_baixa" : "Alta","id" : this.idProntuario};
          try{
            var response = await enfChefeServices.baixarProntuario(data);
            console.log(response);
          }
          catch(erro){
             console.log("deu ruim");
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