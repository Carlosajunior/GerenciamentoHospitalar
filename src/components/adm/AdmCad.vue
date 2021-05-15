<template>
  <body class="formulario">
    <h2></h2>
    <form @submit.prevent="postForm">
      <div >
        <label for="">Nome completo</label>
        <input class="input-for" type="text" v-model="name" required />
      </div>
      <div v-if="this.cadastroData==true">
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
        <label for="">Apelido</label>
        <input class="input-for" type="text"  v-model="apelido" required  />
      </div>
      <div>
        <label for="">Senha</label>
        <input class="input-for" type="password" id="senha" v-model="senha" required  />
      </div>
      <div>
        <label for="">Repetir senha</label>
        <input class="input-for" type="password" id="senha2" required  />
      </div>
    
        <label for="">Cargo</label>
        <select v-model="selected">
          <option disabled value="">Escolha um cargo</option>
          <option value=1>Administrador</option>
          <option value=2> Enfermeiro-Chefe </option>
          <option value=3> Enfermeiro </option>
          <option value=4 > Estagiário </option>
        </select>
        
    
          <button type="submit" class="b-salvar">Salvar</button>
          <button class="b-cancelar">Cancelar</button>
      
    </form>
  </body>
</template>

<script>
import axios from 'axios' 
export default {
  nome: "AdmCad",
  props: {
    h2Name : String,
    cadastro : Boolean
  },
  data(){
    return{
    name : "Nome",
    cpf : "CPF",
    enderco:"Endereço",
    telefone:"Telefone",
    email:"Email",
    senha : null,
    apelido : "Apelido",
    response : null,
    selected: "",
    cadastroData : this.cadastro
    }
  },
  methods:{
    
    postForm(){
      console.log(this.cadastroData)
    //  var cadastroUser ={"nome" : this.name, "cpf" : this.cpf, "telefone" : this.telefone,
      // "email" : this.email, "apelido" : this.apelido, "endereco": this.enderco, "id_Cargo" : this.selected}
      var cadastroUser = {
  "id": 0,
  "petId": 0,
  "quantity": 0,
  "shipDate": "2021-05-14T04:29:54.362Z",
  "status": "placed",
  "complete": true
}
      if (this.cadastroData){
        console.log("Cadastro")
        
        axios({methods:"POST","url":"http://127.0.0.1:8000/cadastrar-usuario ", "data" : cadastroUser,"headers" : {"content-type": "aplication/json",
        "Access-Control-Allow-Origin":"*"}}).then(
          result =>{
            this.response = result.data;
            alert("Formulário enviado")
          }
        ) 
        console.log(this.response)
        //this.$router.push('HomeAdm')

      } 

      else{
        cadastroUser.operacao = "Editar Usuário"
        console.log("Editar")
        /*
        axios({methods:"POST","url":"httpblablba", "data" : cadastroUser,"headers" : {"content-type": "aplication/json"}}).then(
          result =>{
            this.response = result.data;
          }
        )
        */
      }
    }
  },

  creat :{ validarSenha() {
  var senha1 = document.getElementById("senha");
  var senha2 = document.getElementById("senha2");
  
  var s1 = senha1.value;
  var s2 = senha2.value;
  if (s1 == s2) {
    alert("Dados Cadastrados");
    return true;
  } else {
    alert("Senhas não batem. Verifique o valor digitado.");
    return false;
  }
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