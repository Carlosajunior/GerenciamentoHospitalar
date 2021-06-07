<template>
  <div class="formulario">
    <div class="filtro">
      <label for="">Data da baixa: </label>
      <input id="date" type="date" />
      <button>Filtrar</button>
    </div>
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
        <th scope="col">Identificador do Paciente</th>
        <th scope="col">Medicação</th>
        <th scope="col">Dosagem</th>
        <th scope="col">Quarto</th>
        <th scope="col">Data</th>
        <th scope="col">Horário </th>
      </thead>

      <tbody >
          <enf-agendamentos-concluidos-cell/>
      </tbody>
    </table>
  </div>
</template>

<script>
import EnfMenu from "../components/enf/EnfMenu.vue";
import EnfBar from '../components/adm/AdmBar.vue'
import EnfAgendamentosConcluidosCell from '../components/enf/EnfAgendamentosConcluidosCell'
import axios from 'axios';
export default {
  name : 'EnfAgendamentoConcluido',
  components: { EnfMenu, EnfBar,EnfAgendamentosConcluidosCell },
  created(){
    axios({method:'GET','url':'ps://swapi.dev/api/people/'})
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