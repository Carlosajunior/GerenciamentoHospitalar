<template>
      <button button  @click="plantao"  class="b-salvar">Entrar em plantão</button>
      <button class="b-cancelar" @click="plantao" >Sair do plantão</button>
</template>

<script>
import plantao from "../../services/plantao.js"
export default {
  name:"EnfChefePlantao",
  methods:{
    async plantao(){

      var data = {'id' : sessionStorage.getItem('id_usuario')};
      var response = await plantao.post(data);
      console.log(response);
    }
  }
}
</script>

<style>
.b-salvar{
 margin-right: 3%;
  background: #2ba9f1;
}
.b-cancelar{
    background: red;
}
button {
  display: inline-block;
  width: 15%;
  border: none;
  padding: 4px;
  color: white;
  border-radius: 5px;
}
</style>