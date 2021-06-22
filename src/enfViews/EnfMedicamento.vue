<template>
<div class="formulario">
    
    <div>
        <enf-menu> </enf-menu>
    </div>
    <div>
        <enf-bar
            :title="'Estoque de Medicamentos'"
            kindUser="Enfermeiro"
        >
        </enf-bar>
    </div>        
    <table class="table">
        <thead>
            <th scope="col">Medicação </th>
            <th scope="col">Lote</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Quantidade a ser retirada</th>
            <th scope="col">Baixar Medicamento </th>
        </thead>

        <tbody v-for="(medicamento ,index) in response" :key="index">
            <enf-medicamentos
            :medicacao="medicamento.nome"
            :lote="medicamento.lote"
            :quantidade="medicamento.quantidade"
            :id="medicamento.id"
            :idBaixa="medicamento.id_baixaMedicamento"
          />
        </tbody>
    </table>
</div>
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfMedicamentos from '../components/enf/EnfMedicamentos.vue'
import enfermeiroServices from "../services/enfermeiroServices.js"
export default {
    data() {
        return {
        response: undefined,
        };
    },
    components:{EnfMenu, EnfBar, EnfMedicamentos},
    methods:{
      async gerarMedicamentos(){
      this.response = (await enfermeiroServices.estoqueMedicamentos()).data;
      console.log(this.response);
    } 
    },
    created() {
      this.gerarMedicamentos();
    }, 
};
</script>

<style>

.formulario {
  width: 800px;
  margin-top: 10%;
  margin-left: 30%;
}
.filtro {
  padding: 2%;
}
button {
  border: none;
  background-color: #2ba9f1;
  color: white;
  padding: 4px;
  border-radius: 3px;

}
label {
  margin-right: 1%;
}
thead{
  background-color: rgb(238, 238, 238);
}

#text {
  display: inline;
}

</style>