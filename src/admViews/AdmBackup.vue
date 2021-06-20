<template>
  <div class="container" id="divdiv">
    <input type="checkbox" id="nav-toggle" />
    <adm-menu> </adm-menu>
    <div id="main-content">
      <adm-bar :title="'Backup'" :kindUser="'Administrador'"> </adm-bar>
      <div class="formulario">
        <div class="mb-3">
          <label class="form-label"
            >O arquivo de backup do banco de dados será salvo dentro na pasta do
            sitema, dentro da pasta backup, localizada dentro da pasta
            public.</label
          >
        </div>
        <button @click="backup()" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</template>

<script>
import AdmBar from "../components/adm/AdmBar.vue";
import AdmMenu from "../components/adm/AdmMenu.vue";
import admServices from "../services/admServices";
export default {
  name: "AdmCadastrar",
  components: { AdmBar, AdmMenu },
  methods: {
    async backup() {
      await admServices.backup();
    },
  },
};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

#divdiv {
  margin-top: 10%;
}
</style>