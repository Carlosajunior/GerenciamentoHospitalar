<template>

    <form @submit.prevent="postForm">
      <div >
        <label for="">Paciente</label>
        <input class="input-for" type="text" v-model="paciente" required />
      </div>
      <div>
        <label for="">Enfermeiro/Estagiário</label>
        <input class="input-for" type="text" v-model="enf" required />
      </div>
      <div>
        <label for="">CID</label>
         <select v-model="cid">
          <option disabled value="">Escolha a CID:</option>
          <option> {{cids}}  </option>
         </select>
      </div>
      <div>
        <label for="">Posologia</label>
        <input class="input-for" type="text" v-model="posologia" required  />
      </div>
      <div>
        <label for="">Quarto</label>
        <input class="input-for" type="text"  v-model="quarto" required  />
      </div>
          <button type="submit" class="b-salvar">Salvar</button>
          <button class="b-cancelar">Cancelar</button>
      
    </form>
</template>

<script>
import enfChefeProntuario from "../../services/enfChefeProntuario"

export default {
  nome: "EnfChefeProCad",
  props: {
    cids: null,
  },
  data(){
    return{
    paciente : undefined,
    enf : undefined,
    cid : '',
    posologia:undefined,
    quarto:undefined,
    }
  },
  
    methods:{
    
    async postForm(){
      console.log(this.cadastroData)
      var cadastroUser ={"paciente" : this.paciente, "enf" : this.enf, "cid" : this.cid,
      "posologia" : this.posologia, "quarto" : this.quarto}
      var cadastrar = await enfChefeProntuario.post(cadastroUser)
      console.log(cadastrar)
      }
      },

}


</script>

<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
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
  display: inline-block;
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