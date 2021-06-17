<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Acompanhar Prontuário'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
      <table class="table">
      <thead>
    <tr>
        <th scope="col">Nome do paciente</th>
        <th scope="col">ID do prontuário</th>
        <th scope="col">Status da baixa</th>
        <th scope="col">Editar prontuário</th>
        <th scope="col">Baixa prontuário</th>
        <th scope="col">Visualizar prontuário</th>
    </tr>
 </thead>

      <tbody v-for="planeta in response" :key="planeta">
          <enf-chefe-prontuario
          :paciente="planeta.name"
          :idProntuario="planeta.name"
             >
        </enf-chefe-prontuario>
      </tbody>
    </table>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefeProntuario from '../components/enfChefe/EnfChefeProntuario.vue'
import axios from "axios";
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefeProntuario},
data() {
    return {
      response: {},
    };
  },
  created() {
    axios({ method: "GET", url: " https://swapi.dev/api/planets/" }).then(
      (result) => {
        this.response = result.data.results;
        console.log("Não deu erro!");
        console.log(this.response);
      },
      (error) => {
        console.log("Erro");
        console.error(error);
      }
    );
  }

};
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>