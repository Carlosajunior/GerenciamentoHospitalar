<template>
  <body class="formulario">
    <h2></h2>
    <form @submit.prevent="postForm">
      <div >
        <label for="">Nome completo</label>
        <input class="input-for" type="text" v-model="name" required />
      </div>
      <div>
        <label for="">CPF</label>
        <input class="input-for" type="text" v-model="cpf" required />
      </div>
      <div>
        <label for="">Email</label>
        <input class="input-for" type="email"  v-model="email" required />
      </div>
      <div>
        <label for="">Telefone</label>
        <input class="input-for" type="text" v-model="telefone" required  />
      </div>
      <div>
        <label for="">Endereço</label>
        <input class="input-for" type="text"  v-model="endereco" required  />
      </div>
      <div>
        <label for="">Tipo sanguíneo</label>
        <input class="input-for" type="text"  name="Tipo sanguineo" required  />
      </div>
      <div>
        <label for="">Nome do responsável</label>
        <input class="input-for" type="text"  name="Nome do responsavel" required  />
      </div>
      <div>
        <label for="">Telefone do responsável</label>
        <input class="input-for" type="text"  name="Telefone do responsavel" required  />
      </div>    
    
          <button type="submit" class="b-salvar">Salvar</button>
          <button class="b-cancelar">Cancelar</button>
      
    </form>
  </body>
</template>

<script>
//import axios from 'axios' 
export default {
  nome: "EstagCad",
  props: {
    h2Name : String,
    cadastro : Boolean
  },
  data(){
    return{
    name : null,
    cpf : null,
    enderco:null,
    telefone:null,
    email:null,
    response : null,
    cadastroData : this.cadastro
    }
  },
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
  background: blue;
 
}
.b-cancelar{
  background:crimson;
  }
</style>