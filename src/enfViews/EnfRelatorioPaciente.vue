<template>
    <div class="formulario">
        <div>
            <enf-menu>
            </enf-menu>
        </div>
        <div>
            <enf-bar :title="'Relatório de Pacientes'" kindUser="Enfermeiro">
            </enf-bar>
        </div>
        
        <div class="filtro">
            <label for="">Nome do paciente ou identificador: </label>
            <input id="text" type="text" />
            <button>Buscar</button>
        </div>

        <table class="table">
            <thead>
                <th scope="col">Paciente</th>
                <th scope="col">Identificador</th>
                <th scope="col">Prontuário</th>
            </thead>

            <tbody v-for="(planeta, index) in response" :key="planeta">
                <enf-rela
                    :paciente="planeta.name"
                    :id="index"
                    :prontuario="planeta.climate"
                >
                </enf-rela>
            </tbody>
        </table>
    </div>        
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfRela from '../components/enf/EnfRela.vue'
import axios from "axios";
export default {
    components:{EnfMenu, EnfBar, EnfRela},
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
  }, 
};
</script>

<style>

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
  background-color: #2ba9f1;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}

label {
  margin-right: 1%;
}

thead{
  background-color: rgb(238, 238, 238);
}

</style>