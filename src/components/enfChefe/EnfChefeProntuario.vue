<template>

     <tr>
        <th scope="col">{{paciente}}</th>
        <th scope="col">{{idProntuario}}</th>
        <th scope="col"> <button @click="cadastrar" class="btn btn-success">Cadastrar </button> </th>
        <th scope="col"> <button @click="baixar" class="btn btn-primary"> Dar baixa </button> </th>
        
    </tr>

   
</template>

<script>
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

        baixa(){}
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