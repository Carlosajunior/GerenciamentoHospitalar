<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar :title="'Log De Alterações'" kindUser="Administrador">
            </adm-bar>
            <div class="container">
            <div class="row" style="margin-top:50px">
                <div class="col-md-3"/>
                <div class="col-md-6">
                    <div class="table-responsible">
                        <h2>Log de Alterações</h2>
                        <table class="table">
                            <thead>
                                <th scope="col"> Apelido </th>
                                <th scope="col"> Cargo </th>
                                <th scope="col"> Alteração </th>
                                <th scope="col"> Data </th>
                                <th scope="col"> Hora </th>
                            </thead>

                            <tbody v-for="(alt,index) in response" :key="index">
                                
                                <adm-log-cell :apelido="alt.apelido" :name="alt.cargo" :alteracao="'Editar usuário'" :cargo="'Administrador'" :data="alt.data_alteracao" ></adm-log-cell>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
        </div>
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
//import AdmLogComp from '../components/adm/AdmLogComp.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
import AdmLogCell from '../components/adm/AdmLogCell.vue'
import axios from 'axios'
export default {
    name: 'AdmLog',
    components: {AdmBar,
    AdmMenu,AdmLogCell},
    data(){
        return {
            dataDoLog : new Date(),
            response : undefined
        }
    },
    created(){
        axios({method:"GET","url":" http://127.0.0.1:8000/logs"}).then(result =>{
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