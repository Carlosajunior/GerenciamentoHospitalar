<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Agendamentos Pendentes'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
    
    <table class="table">
      <thead>
       <th scope="col">Nome do paciente</th>
        <th scope="col">Posologia</th>
        <th scope="col">Insira o Enfermeiro/Estagiário </th>
        <th scope="col">Aperte</th>
        <th scope="col">Prontuário</th>
        <th scope="col">Data</th>
     
        

      </thead>

      <tbody v-for="planeta in response" :key="planeta">
          <enf-chefe-pendentes
          :paciente="planeta.name"
          :idEnf="planeta.orbital_period"
          :prontuario="planeta.population"
          :data="planeta.population"
          :id ="planeta.id"
            
             >
        </enf-chefe-pendentes>
      </tbody>
    </table>
</div> 
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefePendentes from '../components/enfChefe/EnfChefePendentes.vue'
import enfChefeServices from '../services/enfChefeServices';


export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefePendentes},
data() {
    return {
      response: {},
    };
  },
  methods :{
      async agendamentos(){
          this.response = await enfChefeServices.agendamentosPendentes();
          console.log(this.response)
      }
  },
  created() {
      this.agendamentos();
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



