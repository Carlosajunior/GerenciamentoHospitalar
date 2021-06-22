<template>
  <div class="formulario">
    <div>
      <enf-menu> </enf-menu>
    </div>
    <div>
      <enf-bar
        :title="'Agendamentos Concluidos'"
        kindUser="Enfermeiro"
      >
      </enf-bar>
    </div>
    
    <table class="table">
      <thead>
        <th scope="col">Identificador do Prontuario</th>
        <th scope="col">Posologia</th>
    
        <th scope="col">Data</th>
      </thead>

      <tbody v-for="agendamentos in response" :key="agendamentos" >
          <enf-agendamentos-concluidos-cell 
          :id="agendamentos.id" :medicacao="agendamentos.posologia" 
          :data="agendamentos.data_hora" />
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfMenu from "../components/enf/EnfMenu.vue";
import EnfBar from '../components/adm/AdmBar.vue'
import EnfAgendamentosConcluidosCell from '../components/enf/EnfAgendamentosConcluidosCell'

import enfermeiroServices from '../services/enfermeiroServices';
export default {
  name : 'EnfAgendamentoConcluido',
  components: { EnfMenu, EnfBar,EnfAgendamentosConcluidosCell },
  data() {
    return{
      response : null
    }
  },
  methods:{
      async concluidos(){
        var data = {"id" : sessionStorage.getItem("id_usuario")}
        var res = (await enfermeiroServices.agendamentosConcluidos(data));
        console.log(res);
        this.response = res.data;
      }
  },
  created() {
    this.concluidos();
  }
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

#date {
  display: inline;
}
</style>