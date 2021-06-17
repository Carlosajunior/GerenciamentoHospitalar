<template>
  <div class="login">
    <div class="container">
      <div class="col-md-10 offset-md-3">
        <h2>Entrar</h2>
      </div>
      <form id="form" @submit.prevent="login" method="post" autocomplete="off">
        <div class="form-group" style="border-width: 2px">
          <div class="col-md-10 offset-md-3">
            <label for="exampleInputEmail1" class="form-label">Usuário</label>
            <input
              v-model="apelido"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Apelido"
              required
            />
            <p class="subtitle">
              Não compartilhe seu nome de usuário e senha com mais ninguém
            </p>
          </div>
          <div class="col-md-10 offset-md-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input
              v-model="senha"
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="Senha"
              required
            />
          </div>
          <div class="col-md-10 offset-md-3">
            <router-link to="/about">Esqueceu a senha? </router-link>
          </div>
          <div class="col-md-10 offset-md-3" style="margin-top: 3%">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
        </div>
      </form>
      <div v-show="hasErro" class="alert alert-danger" role="alert">
        Credenciais inválidas!
      </div>
    </div>
  </div>
</template>

<script >
import loginService from "../services/loginService";
export default {
  name: "Login",
  data() {
    return {
      apelido: null,
      senha: null,
      hasErro: false,
      response: null,
      selected: null,
    };
  },

  methods: {
    async login() {
      if (this.apelido != null && this.senha != null) {
        var loginDataLaravel = { apelido: this.apelido, senha: this.senha };
        try {
          var login = await loginService.post(loginDataLaravel);
        } catch (login) {
          this.hasErro = true;
        }
        if (login) {
          this.$emit("authenticaded", true);
          sessionStorage.setItem("token", login.data.token);
          sessionStorage.setItem("user", this.apelido);
          sessionStorage.setItem("id_cargo", login.data.id_cargo);
          sessionStorage.setItem("id_usuario", login.data.id);
          if (sessionStorage.getItem("id_cargo") == 1) {
            sessionStorage.setItem("kindUser", "Administrador");
            this.$router.replace({ name: "HomeAdm" });
          } else if (localStorage.getItem("id_cargo") == 2) {
            sessionStorage.setItem("kindUser", "Enfermeiro Chefe");
            this.$router.replace({ name: "HomeEnfChefe" });
          } else if (
            localStorage.getItem("id_cargo") == 3 ||
            localStorage.getItem("id_cargo") == 4
          ) {
            sessionStorage.setItem("kindUser", "Enfermeiro");
            this.$router.replace({ name: "HomeEnf" });
          }
        }
      }
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.form-label {
  margin-right: 70%;
}
h6 {
  font-size: 17px;
  margin: 0%;
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

p {
  font-size: xx-small;
}

h2 {
  padding-top: 5%;
}
div .login {
  align-content: center;
  margin-top: auto;
  margin-left: auto;
  padding: auto;
}

label #lembrarSenha {
  font-size: x-small;
}
</style>