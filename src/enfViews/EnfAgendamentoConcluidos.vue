<template>
  <div class="formulario">
    <div>
      <enf-menu> </enf-menu>
    </div>
    <div id="main-content">
      <enf-bar> </enf-bar>
    </div>
    <div class="row">
      <div class="col-md-3"/>
      <div class="col-md-6">
        <div class="table-responsible">
        <table class="table">
            <thead>
                  <tr class="titulo">
                  <th scope="col">Identificador do Paciente</th>
                  <th scope="col">Medicação</th>
                  <th scope="col">Dosagem</th>
                  <th scope="col">Quarto</th>
                  <th scope="col">Data</th>
                  <th scope="col">Horário </th>
                </tr>
            </thead>

            <tbody >
                <enf-agendamentos-concluidos-cell/>
            </tbody>
        </table>
        </div>
      </div>
      
    </div>
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
</style>