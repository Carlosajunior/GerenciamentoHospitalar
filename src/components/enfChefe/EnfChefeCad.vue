<template>
  <body class="formulario">
    <form @submit.prevent="postForm">
      <div class="divs">
        <label for="">Nome completo</label>
        <input class="input-for" type="text" v-model="nome" required />
      </div>
      <div class="divs">
        <label for="">CPF</label>
        <input class="input-for-menor" type="text"  pattern="\d{11}" v-model="cpf" required />
      </div>
      <div class="divs">
        <label for="">Email</label>
        <input class="input-for" type="email"  v-model="email" required />
      </div>
      <div class="divs">
        <label for="">Telefone</label>
        <input class="input-for-menor" type="text"  v-model="telefone" required  />
      </div>
      <div class="divs">
        <label for="">Endereço</label>
        <input class="input-for" type="text"  v-model="endereco" required  />
      </div>
      <div class="divs">
      <label for="">Tipo sanguíneo </label>
        <select v-model="TipoSanguineo">
          <option disabled value="">Escolha um tipo sanguíneo:</option>
          <option value=1>A+</option>
          <option value=2>A-</option>
          <option value=3>B+ </option>
          <option value=4 >B- </option>
          <option value=5 >AB+ </option>
          <option value=6 >AB- </option>
          <option value=7 >O+ </option>
          <option value=8 >O- </option>
        </select>
      </div>  
      <div class="divs">
        <label for="">Nome do responsável</label>
        <input class="input-for" type="text"  v-model="NomeResponsavel" required  />
      </div>
      <div class="divs">
        <label for="">Telefone do responsável</label>
        <input class="input-for-menor" type="text"  v-model="TelResponsavel" required  />
      </div>    
    
          <button type="submit" class="b-salvar">Salvar</button>
          <button class="b-cancelar">Cancelar</button>
      
    </form>
  </body>
</template>

<script>
//import axios from 'axios'
import enfChefeServices from "../../services/enfChefeServices"
export default {
  
  nome: "EnfChefeCad",
  data(){
    return{
    name : undefined,
    cpf : undefined,
    enderco: undefined,
    telefone: undefined,
    email: undefined,
    TipoSanguineo : undefined,
    NomeResponsavel: undefined,
    TelResponsavel: undefined,
    cadastroData : this.cadastro
    }
  },
   methods:{
    
    async postForm(){
      console.log(this.cadastroData)
      var cadastroUser ={"nome" : this.name, "cpf" : this.cpf, "telefone" : this.telefone,
      "email" : this.email, "TipoSanguineo" : this.TipoSanguineo, "NomeResponsavel": this.NomeResponsavel,
      "endereco": this.enderco, "TelResponsavel" : this.TelResponsavel}
      var cadastrar = await enfChefeServices.post(cadastroUser)
      console.log(cadastrar)
      }
      }
};
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

.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

.divs{
 padding: 3px;
}

input , select{
    border: 1px solid #ccc!important;
    display: block;
    border: none;
    border-bottom: 1px solid #ccc;
    padding: 3px 3px;
    border-radius: 5px;
}
select{
   width: 30%;
}
.input-for {
  width: 60%
}

.input-for-menor{
  width: 30%;
}

button, input {
    overflow: visible;
}

input:focus {
  border: 3px solid #555;
}

button{
  display: inline-block;
  width: 15%;
  margin: 10px;
  border: none;
  padding: 4px;
  color: white;
  border-radius: 5px;
}

label {
  margin-bottom: 0%;
}

.b-salvar{
  margin-left: 100px;
  background: #2BA9F1;
 
}
.b-cancelar{
  background: red;
  }


</style>