<template>
  <div>
    <adm-menu></adm-menu>
    <div id="main-content">
      <adm-bar :title="'Editar Usuário'" :cadastro="false"></adm-bar>
      <div v-show="!view" class="main"><adm-edit @sair='view = !view' /></div>
    </div>
    <div class="row" style="margin-top: 50px" v-show="view">
      <div class="col-md-3" />
      <div class="col-md-6">
        <div class="table-reponsible">
          <h2>Editar Usuário</h2>
          <table class="table">
            <thead>
              <th scope="col">Apelido</th>
              <th scope="col">Nome</th>
              <th scope="col">Cargo</th>
              <th scope="col">Selecione</th>
              <th scope="col">Selecione</th>
            </thead>
            <tbody v-for="users in response" :key="users">
              <adm-users
                :name="users.nome"
                :apelido="users.apelido"
                :cargo="users.id_Cargo"
                :id="users.id"
                @EditarUser="this.editar"
              />
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AdmBar from "../components/adm/AdmBar.vue";
import AdmMenu from "../components/adm/AdmMenu.vue";
import AdmUsers from "../components/adm/AdmUsers.vue";
import AdmEdit from "../components/adm/AdmEdit.vue";
import axios from "axios";
export default {
  name: "AdmEditar",
  components: { AdmBar, AdmMenu, AdmUsers, AdmEdit },
  data() {
    return {
      response: null,
      edi: undefined,
      view: true,
      idEd: undefined,
    };
  },
  created() {
    axios({
      method: "GET",
      url: " http://127.0.0.1:8000/mostrar-usuarios",
    }).then(
      (result) => {
        this.response = result.data;
        console.log(this.response);
      },
      (error) => {
        console.log("Erro");
        console.error(error);
      }
    );
  },
  methods: {
    editar(valeu) {
      console.log(valeu + "Evento ouvido");
      this.view = false;
    }
  },

};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
main {
  margin-top: 85px;
  padding: 2rem 1.5rem;
  background: #f1f5f9;
  min-height: calc(100vh - 90px);
}
</style>