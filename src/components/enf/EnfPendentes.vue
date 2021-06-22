<template>
  <tr>
    <th scope="col">{{nome}}</th>
    <th scope="col">{{data}} </th>
    <th scope="col">{{medicamento}} </th>
    <th scope="col">
      <button class="btn btn-secondary" @click="baixa">Baixar</button>
    </th>
  </tr>
   
</template>

<script>
import enfermeiroService from "../../services/enfermeiroServices.js"
export default {
    name:"EnfPendentes",
    props:{
      nome : null,
      data : null,
      medicamento : null,

        
    },
    methods:{
      async baixa(){
      var data = {"id" : this.nome};
      
        try{
          var response = await enfermeiroService.agendamentoPendentesBaixa(data)
          console.log(response);
        }
        catch(response){
          this.$emit("Erro");
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
.titulo {
  width:100%;
}
button {
  border: none;
  background-color: #2BA9F1;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
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