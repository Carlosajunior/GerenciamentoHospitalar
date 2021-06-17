<template>
  <div>
    <input type="checkbox" id="nav-toggle" />
    <adm-menu> </adm-menu>
    <div id="main-content">
      <adm-bar :title="'Log De Alterações'" kindUser="Administrador"> </adm-bar>
      <div class="container">
        <div class="row" style="margin-top: 50px">
          <div class="col-md-3" />
          <div class="col-md-6">
            <div class="table-responsible">
              <h2>Log de Alterações</h2>
              <table class="table">
                <thead>
                  <th scope="col">Apelido</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Senha</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">CPF</th>
                  <th scope="col">Editor</th>
                  <th scope="col">Data e Hora</th>
                </thead>
                <tbody v-for="(alt, index) in response" :key="index">
                  <adm-log-cell
                    :apelido="alt.apelido"
                    :nome="alt.nome"
                    :senha="alt.senha"
                    :email="alt.email"
                    :telefone="alt.telefone"
                    :cpf="alt.cpf"
                    :editor="alt.nome_editor"
                    :data_hora="alt.data_alteracao"
                  ></adm-log-cell>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div></div>
    </div>
  </div>
</template>

<script>
import AdmBar from "../components/adm/AdmBar.vue";
import AdmMenu from "../components/adm/AdmMenu.vue";
import AdmLogCell from "../components/adm/AdmLogCell.vue";
import admServices from "../services/admServices";
export default {
  name: "AdmLog",
  components: { AdmBar, AdmMenu, AdmLogCell },
  data() {
    return {
      dataDoLog: new Date(),
      response: undefined,
    };
  },
  created() {
    this.getServices();
  },
  methods: {
    async getServices() {
      admServices.get().then((response)=>{this.response = response.data});
      console.log(await admServices.get().data);
    },
  },
};
</script>