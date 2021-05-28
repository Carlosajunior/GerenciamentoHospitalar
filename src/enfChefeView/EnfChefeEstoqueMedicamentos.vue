<template>
<div class="formulario">
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div>
        <enf-chefebar :title="'Estoque de Medicamentos'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
    </div>
    <div class="row" style="margin-top:140px">
        <div class="table-responsible">
        <table class="table">
            <thead>
      <th scope="col">Medicação</th>
      <th scope="col">Lote</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Data de validade</th>
      <th scope="col">Farmacêutico</th>
    </thead>
        <t-body v-for="(medicamentos) in response" :key="medicamentos">
        <enf-chefe-medicamentos-cell :medicacao="medicamentos.nome" :lote="medicamentos.cpf" :farmaceutico="medicamentos.apelido"
        :quantidade="medicamentos.cpf" :validade="medicamentos.cpf" />
        </t-body>
        </table>
        </div>
    </div>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
//import EnfChefeMedicamentos from '../components/enfChefe/EnfChefeMedicamentos.vue'
import EnfChefeMedicamentosCell from '../components/enfChefe/EnfChefeMedicamentosCell.vue'
import axios from 'axios'
export default {
    data(){
        return{
            response : undefined
        }
    },
    components:{EnfChefeMenu, EnfChefebar, EnfChefeMedicamentosCell},
     created(){
        axios({method:"GET","url":" http://127.0.0.1:8000/mostrar-usuarios"}).then(result =>{
            this.response = result.data;
            console.log("Não deu erro!");
            console.log(this.response);
           
        }, error =>{
            console.log("Erro");
            console.error(error);
        });
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