<template>
  <body class="formulario">
    <form @submit.prevent="postForm">
      <div class="divs">
        <label for="">Nome completo</label>
        <input class="input-for" type="text" v-model="name" />
      </div>
      <div class="divs">
        <label for="">CPF</label>
        <input
          class="input-for-menor"
          type="text"
          pattern="\d{11}"
          v-model="cpf"
          required
        />
      </div>
      <div class="divs">
        <label for="">Email</label>
        <input class="input-for" type="email" v-model="email"/>
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
        <input class="input-for" type="text" v-model="endereco" />
      </div>
      <div class="divs">
        <label for="">Tipo sanguíneo </label>
        <select v-model="TipoSanguineo">
          <option disabled value="">Escolha um tipo sanguíneo:</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>
      <div class="divs">
        <label for="">Nome do responsável</label>
        <input
          class="input-for"
          type="text"
          v-model="NomeResponsavel"
        
        />
      </div>
      <div class="divs">
        <label for="">Telefone do responsável</label>
        <input
          class="input-for-menor"
          type="text"
          v-model="TelResponsavel"
        
        />
      </div>

      <button type="submit" class="b-salvar">Salvar</button>
      <button class="b-cancelar">Cancelar</button>
    </form>
  <div v-show="show" class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Não foi possível realizar cadastro!
  </div>
</div>
  </body>
</template>

<script>
import enfChefeServices from "../../services/enfChefeServices";
export default {
  nome: "EnfChefeCad",
  data() {
    return {
      name: undefined,
      cpf: undefined,
      endereco: undefined,
      telefone: undefined,
      email: undefined,
      TipoSanguineo: undefined,
      NomeResponsavel: undefined,
      TelResponsavel: undefined,
      cadastroData: this.cadastro,
      show : false
    };
  },
  methods: {
    async postForm() {
      console.log(this.cadastroData);
      var cadastroUser = {
        nome: this.name,
        cpf: this.cpf,
        telefone: this.telefone,
        email: this.email,
        fatorRH: this.TipoSanguineo,
        nome_responsavel: this.NomeResponsavel,
        endereco: this.endereco,
        telefone_responsavel: this.TelResponsavel,
      };
      try{
      console.log(cadastroUser);
      var cadastrar = await enfChefeServices.post(cadastroUser);
      console.log(cadastrar);
      }
      catch(cadastrar){
        this.show = true;
      }
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
  margin-top: 8%;
  margin-left: 30%;
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

button,
input {
  overflow: visible;
}

input:focus {
  border: 3px solid #555;
}

button {
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

.b-salvar {
  margin-left: 100px;
  background: #2ba9f1;
}
.b-cancelar {
  background: red;
}

</style>