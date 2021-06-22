<template>

    <form @submit.prevent="postForm">
      <div class="divs">
        <label for="">Identificador do Paciente</label>
        <input class="input-for" type="text" v-model="paciente" required />
      </div>
     
      <div class="divs">
        <label for="">Quarto</label>
        <input class="input-for" type="text"  v-model="quarto" required  />
      </div>

       <div class="divs">
        <label for="">CID</label>
        <input class="input-for" type="text"  v-model="cid" required  />
      </div>
          <button type="submit" class="b-salvar">Salvar</button>
          <button class="b-cancelar" @click="out">Cancelar</button>
      
    </form>
</template>

<script>
import enfChefeProntuario from "../../services/enfChefeProntuario"

export default {
  nome: "EnfChefeProCad",
  data(){
    return{
    paciente : undefined,
    enf : undefined,
    cid : undefined,
    posologia:undefined,
    quarto:undefined,
    }
  },
  
    methods:{
    
    async postForm(){
      console.log(this.cadastroData)
      var cadastroUser ={"id_paciente" : this.paciente, "enf" : this.enf, "idCID" : this.cid, "numero_quarto" : this.quarto, }
      var cadastrar = await enfChefeProntuario.post(cadastroUser)
      console.log(cadastrar)
      },

      out(){
        this.$router.replace({name:'HomeEnfChefe'});
      }
      },

}


</script>

<style scoped>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}

.divs{
 text-align: left;
}
.input-for {
    border: 1px solid #ccc!important;
    padding: 6px;
    display: block;
    border: none;
    border-bottom: 1px solid #ccc;
    width: 50%;
    padding: 1px 2px;
    margin-bottom: 5px;
}
button, input {
    overflow: visible;
}

input:focus {
  border: 3px solid #555;
}
.input-radio{
  margin-left: 3%;
}
button{
  display: inline-table;
  width: 15%;
  margin: 10px;
  border: none;
  padding: 4px;
  color: white;
}
.b-salvar{
  margin-left: 100px;
  background: #2BA9F1;
 
}
.b-cancelar{
  background: red;
  }

</style>