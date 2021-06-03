<template>
    <div class="formulario">
        <div>
            <enf-menu>
            </enf-menu>
        </div>
        <div id ="main-content">
            <enf-bar 
              :title="'Relatório de Pacientes'" 
              kindUser="Enfermeiro"
            >
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

            <tbody v-for="(val, index) in lista1" :key="index">
                <enf-rela
                    :paciente="val.nome"
                    :id="val.id"
                    :prontuario="lista2[index]"
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
      lista1 : undefined,
      lista2 : undefined
    };
  },
  created() {
    axios({ method: "GET", url: " http://127.0.0.1:8000/RelatorioPacienteEnf" }).then(
      (result) => {
        this.response = result;
        this.lista1 = result.data[0]
        this.lista2 = result.data[1]
        console.log("Não deu erro!");
        console.log(this.response);
        console.log(this.lista1)
        console.log(this.lista2)
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

.formulario #main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
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