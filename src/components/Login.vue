<template>
  <div class="login" >
  <div class="container">
    <div class="col-md-10 offset-md-3">
    <h2>Entrar </h2>
    </div>
  <form id="form" @submit.prevent="login" method="post" autocomplete="off">
  <div class="form-group" style="border-width:2px">
  <div class="col-md-10 offset-md-3">

    <label for="exampleInputEmail1" class="form-label">Usuário</label>
    <input v-model="apelido"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apelido">
    <p class="subtitle">Não compartilhe seu nome de usuário e senha com mais ninguém</p>
  </div>
  <div class="col-md-10 offset-md-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input v-model="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">

  </div>
  <div class="mb-3 form-check">
    
  </div>
  <div class="col-md-10 offset-md-3">
    <router-link to= "/about">Esqueceu a senha? </router-link>
  </div>
  <div class="col-md-10 offset-md-3" style="margin-top:3%">
  <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
  </div>
</form>
  </div>
  </div>

</template>

<script >


import loginService from "../services/loginService"
export default {
  name: 'Login',
  data(){
    return{
      apelido : null,
      senha : null,
      hasErro: false,
      response : null,
    }
  },


  methods:{
    async login(){
      if (this.apelido != null && this.senha !=null){
        var loginDataLaravel = {"apelido" : this.apelido, "senha" : this.senha}
      //  axios({methods:"POST", "url":"https://127.0.0.1:8000/login", "data": loginDataLaravel, "headers" : {"content-type": "aplication/json"}}).then(
      //    result => {
      //      this.response = result.data;
      //    }
      //  );
        var teste = await loginService.post(loginDataLaravel)
        console.log(teste.data);
        if(this.apelido == "Adm" && this.senha == "Adm"){
          this.$emit("authenticaded",true);
          this.$router.replace({name:"HomeEnf"})
        }
        else{
          console.log("Dados incorretos");
        }
      }
    }
  }
}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.form-label{
  margin-right: 70%;
}
h6{
  font-size: 17px;
  margin:0%;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
  font-size: small;
}

p{
  font-size: xx-small;
}

h2{
  padding-top: 5%;
}
div .login{
  align-content: center;
  margin-top: auto;
  margin-left: auto;
  padding: auto;
}

label #lembrarSenha{
  font-size: x-small;
}

</style>