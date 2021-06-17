<template>
<div class="formulario">
    <form @submit.prevent="editarForm">
      <div>
        <label for="">Nome completo</label>
        <input class="form-control" type="text" v-model="name" />
      </div>
      <div>
        <label for="">CPF</label>
        <input class="form-control" type="text" v-model="cpf" />
      </div>
      <div>
        <label for="">Email</label>
        <input class="form-control" type="email"  v-model="email" />
      </div>
      <div>
        <label for="">Telefone</label>
        <input class="form-control" type="text" v-model="telefone"  />
      </div>
      <div>
        <label for="">Endereço</label>
        <input class="form-control" type="text"  v-model="endereco"  />
      </div>
      <div>
        <label for="">Apelido</label>
        <input class="form-control" type="text"  v-model="apelido"  />
      </div>
      <div>
        <label for="">Senha</label>
        <input class="form-control" type="password" id="senha" v-model="senha"  />
      </div>
      <div v-if ="this.senha != null">
        <label for="">Repetir senha</label>
        <input class="form-control" type="password" id="senha2" required  />
      </div>
    
        <label for="">Cargo</label>
        <select class="form-select" v-model="selected">
          <option disabled value="">Escolha um cargo</option>
          <option value=1>Administrador</option>
          <option value=2> Enfermeiro-Chefe </option>
          <option value=3> Enfermeiro </option>
          <option value=4 > Estagiário </option>
        </select>
          <button type="submit" class="btn btn-primary">Salvar</button>
          <button class="btn btn-danger">Cancelar</button>      
    </form>
</div>
</template>

<script>
import admEditarService from "../../services/admEditarService"

export default {
  nome: "AdmEdit",
  props: {
    h2Name : String,
    cadastro : Boolean
  },
  data(){
    return{
    name : undefined,
    cpf : undefined,
    enderco:undefined,
    telefone:undefined,
    email:undefined,
    senha : null,
    apelido : undefined,
    response : null,
    selected: undefined
    }
  },
  methods:{
    async editarForm(){
      var editarUser ={"id":"" ,"cpf": this.cpf,"nome" : this.name, "telefone" : this.telefone,
      "email" : this.email, "apelido" : this.apelido, "senha": this.senha}
      var editar = await admEditarService.editar(editarUser)
      console.log(editar);
    },
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