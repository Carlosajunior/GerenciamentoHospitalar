<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar :title="'Log De Alterações'" kindUser="Administrador">
            </adm-bar>

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

                            <tbody v-for="(planeta,index) in response" :key="planeta">
                                
                                <adm-log-cell :apelido="index" :name="planeta.name" :alteracao="planeta.name" :cargo="planeta.climate" :data="dataDoLog" ></adm-log-cell>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
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
            dataDoLog : new Date()
        }
    },
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