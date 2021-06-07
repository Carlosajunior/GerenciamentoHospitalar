<template>
<div class="formulario">
    <div class="filtro">
      <label class="labelinvisivel"></label>
    </div>
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
            <th scope="col">Medicação</th>
            <th scope="col">Lote</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Data de validade</th>
            <th scope="col">Farmacêutico</th>
        </thead>

        <t-body v-for="medicamentos in response" :key="medicamentos">
            <enf-medicamentos
            :medicacao="medicamentos.nome"
            :lote="medicamentos.cpf"
            :farmaceutico="medicamentos.apelido"
            :quantidade="medicamentos.cpf"
            :validade="medicamentos.cpf"
            />
        </t-body>
    </table>
</div>
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfMedicamentos from '../components/enf/EnfMedicamentos.vue'
import axios from "axios";
export default {
    data() {
        return {
        response: undefined,
        };
    },
    components:{EnfMenu, EnfBar, EnfMedicamentos},
    created() {
        axios({
            method: "GET",
            url: " http://127.0.0.1:8000/mostrar-usuarios",
        }).then(
            (result) => {
                this.response = result.data;
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

.labelinvisivel {
    margin-top: 20px !important;
}
</style>