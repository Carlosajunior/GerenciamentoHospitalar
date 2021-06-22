<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div>
      <enf-chefebar
        :title="'Estoque de Medicamentos'"
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>
    <table class="table">
      <thead>
        <th scope="col">Medicação</th>
        <th scope="col">Lote</th>
        <th scope="col">Quantidade</th>
     
      </thead>
      <tbody v-for="medicamentos in response" :key="medicamentos">
        <enf-chefe-medicamentos-cell
          :nome="medicamentos.nome"
          :lote="medicamentos.lote"
          :quantidade="medicamentos.quantidade"
        />
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
//import EnfChefeMedicamentos from '../components/enfChefe/EnfChefeMedicamentos.vue'
import EnfChefeMedicamentosCell from "../components/enfChefe/EnfChefeMedicamentosCell.vue";
//import axios from "axios";

import enfermeiroServices from '../services/enfermeiroServices';
export default {
  data() {
    return {
      response: undefined,
    };
  },
  components: { EnfChefeMenu, EnfChefebar, EnfChefeMedicamentosCell },
  created() {
   this.gerarMedicamentos();
  },

  methods : {
    async gerarMedicamentos(){
      this.response = (await enfermeiroServices.estoqueMedicamentos()).data;
      console.log(this.response);
    } 
  }
};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
thead {
  background-color: rgb(238, 238, 238);
}
</style>