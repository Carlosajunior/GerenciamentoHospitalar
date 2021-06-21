<template>
   
    <tr>
      <th scope="col">{{medicacao}}</th>
      <th scope="col">{{lote}}</th>
      <th scope="col">{{quantidade}}</th>
      <th scope="col">   
      <input class="form-control" v-model="baixarQuantidade">
      </th>
      <th scope="col"><button class="btn btn-secondary" @click="baixarMedicamento">Baixar</button></th>
    </tr>
  
</template>

<script>
import enfermeiroServices from "../../services/enfermeiroServices.js";
export default {
  name: "EnfMedicamentos",
  props: {
    medicacao: null,
    lote: null,
    quantidade: null,
    id : null
  },
  data(){
    return{
      baixarQuantidade : undefined
    }
  },

  methods:{
    async  baixarMedicamento(){
      var send = {"id" : this.id,"quantidade" : this.baixarQuantidade };
      var response = undefined;
      try{
      response = await enfermeiroServices.baixarMedicamento(send)
      console.log(response)
      }

      catch(response){
          this.$emit("FalhaBaixaMedicamento",false);
      }
          
          }
  }
};
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
  background-color: #35b736;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}

th[scope="col"] {
  padding: 10px;
}
</style>