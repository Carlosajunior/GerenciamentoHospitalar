<template>
  <body class="formulario">
    <div style='margin-top:10%'>
      <form @submit.prevent="postForm">
        <div class="divs">
          <label for="">Nome completo</label>
          <input class="form-control" type="text" v-model="name" required />
        </div>
        <div class="divs">
          <label for="">CPF</label>
          <input class="input-for" type="text" v-model="cpf" required />
        </div>
        <div class="divs">
          <label for="">Email</label>
          <input
            class="input-for-menor"
            type="email"
            v-model="email"
            required
          />
        </div>
        <div class="divs">
          <label for="">Telefone</label>
          <input
            class="input-for-menor"
            type="text"
            v-model="telefone"
            required
          />
        </div>
        <div class="divs">
          <label for="">Endereço</label>
          <input class="form-control" type="text" v-model="endereco" required />
        </div>
        <div class="divs">
          <label for="">Apelido</label>
          <input
            class="input-for-menor"
            type="text"
            v-model="apelido"
            required
          />
        </div>
        <div class="divs">
          <label for="">Senha</label>
          <input
            class="input-for-menor"
            type="password"
            id="senha"
            v-model="senha"
            required
          />
        </div>
        <div class="divs">
          <label for="">Repetir senha</label>
          <input class="input-for-menor" type="password" id="senha2" required />
        </div>
        <label for="">Cargo</label>
        <select class="form-select" v-model="selected">
          <option disabled value="">Escolha um cargo</option>
          <option value="1">Administrador</option>
          <option value="2">Enfermeiro-Chefe</option>
          <option value="3">Enfermeiro</option>
          <option value="4">Estagiário</option>
        </select>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button class="btn btn-danger" @click="cancelar()">Cancelar</button>
        <div v-show="hasErro" class="alert alert-danger" role="alert">
          Não foi possível concluir o cadastro!
        </div>
      </form>
    </div>
  </body>
</template>

<script>
import admServices from "../../services/admServices";

export default {
  nome: "AdmCad",
  props: {
    h2Name: String,
  },
  data() {
    return {
      name: undefined,
      cpf: undefined,
      endereco: undefined,
      telefone: undefined,
      email: undefined,
      senha: null,
      apelido: undefined,
      response: null,
      selected: undefined,
      hasErro: undefined,
    };
  },
  methods: {
    async postForm() {
      var cadastroUser = {
        nome: this.name,
        cpf: this.cpf,
        telefone: this.telefone,
        email: this.email,
        apelido: this.apelido,
        senha: this.senha,
        endereco: this.endereco,
        id_Cargo: this.selected,
      };
      try {
        var response = await admServices.post(cadastroUser);
      } catch (response) {
        this.hasErro = true;
      }
      console.log(response);
    },

    cancelar() {
      this.$router.replace({ name: "HomeAdm" });
    },
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
  margin-left: 30%;
}

.input-for {
  border: 1px solid #ccc !important;
  padding: 6px;
  display: block;
  border: none;
  border-bottom: 1px solid #ccc;
  width: 50%;
  padding: 1px 2px;
  margin-bottom: 5px;
}
button,
input {
  overflow: visible;
}

input:focus {
  border: 3px solid #555;
}
.input-radio {
  margin-left: 3%;
}
button {
  display: inline-block;
  width: 15%;
  margin: 10px;
  border: none;
  padding: 4px;
  color: white;
}
.b-salvar {
  margin-left: 100px;
  background: blue;
}
.b-cancelar {
  background: crimson;
}
.divs {
  padding: 3px;
}
input,
select {
  border: 1px solid #ccc !important;
  display: block;
  border: none;
  border-bottom: 1px solid #ccc;
  padding: 3px 3px;
  border-radius: 5px;
}
select {
  width: 30%;
}
.input-for {
  width: 60%;
}

.input-for-menor {
  width: 30%;
}
</style>