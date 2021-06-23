<template>
  <div class="formulario">
    <div>
      <enf-chefe-menu> </enf-chefe-menu>
    </div>
    <div id ="main-content">
      <enf-chefebar
        :title="'Relatório de Profissionais'"
        kindUser="Enfermeiro Chefe"
      >
      </enf-chefebar>
    </div>

    <table class="table">
      <thead>
        <th scope="col">Profissional de Saúde</th>
        <th scope="col">Apelido</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
       
      </thead>

      <tbody v-for="planeta in response" :key="planeta">
        <enf-chefe-rela
          :enfermeiro="planeta.nome"
          :estado="planeta.apelido"
          :hora="planeta.email"
          :data="planeta.telefone"
          
        >
        </enf-chefe-rela>
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfChefeMenu from "../components/enfChefe/EnfChefeMenu.vue";
import EnfChefebar from "../components/adm/AdmBar.vue";
import EnfChefeRela from "../components/enfChefe/EnfChefeRela.vue";
import enfChefeServices from '../services/enfChefeServices';

export default {
  components: { EnfChefeMenu, EnfChefebar, EnfChefeRela },
  data() {
    return {
      response: {},
    };
  },
  methods:{

    async relatorio(){
      this.response = (await enfChefeServices.relatorioProfissionais()).data;
      console.log(this.response);
    }
  },
  created() {
   this.relatorio();
  },
};
</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}

.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
.filtro {
  padding: 2%;
}
button {
  border: none;
  background-color: #35b736;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}
thead{
  background-color: rgb(238, 238, 238);
}

#date {
  display: inline;
}
</style>