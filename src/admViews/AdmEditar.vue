<template>
        <div>
            <adm-menu></adm-menu>
        <div id="main-content">
            <adm-bar :title="'Editar Usuário'" kindUser="Administrador"></adm-bar>
            
        </div>
        <div class="row" style="margin-top:50px">
            <div class="col-md-3"/>
            <div class="col-md-6">
            <div class="table-reponsible">
                <h2>Editar Usuário</h2>
            <table class="table">
                <thead>
                
                    <th scope="col"> Apelido </th>
                    <th scope="col"> Nome </th>
                    <th scope="col"> Cargo </th>
                    <th scope="col">  Selecione</th>
                    <th scope="col"> Selecione</th>
                </thead>
                <tbody v-for="(planeta,index) in response" :key="planeta">
                    
                     <adm-users :name="planeta.name" :apelido="index" :cargo="planeta.climate"/>
                  
                </tbody>
            </table>
                </div>
            </div>     
            
        </div>
        </div>
        
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
import AdmUsers from '../components/adm/AdmUsers.vue'
import axios from 'axios'
export default {
    name: 'AdmCadastrar',
    components: {AdmBar,
    AdmMenu,AdmUsers},
    data(){
        return{
            response : null
        }
    },
    usuarios: {},
    created(){
        axios({method:"GET","url":" https://swapi.dev/api/planets/"}).then(result =>{
            this.response = result.data.results;
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
main {
  margin-top: 85px;
  padding: 2rem 1.5rem;
  background: #f1f5f9;
  min-height: calc(100vh - 90px);
  
}
</style>