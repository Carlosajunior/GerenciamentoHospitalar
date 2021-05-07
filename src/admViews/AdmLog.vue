<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar title="LogDeAlterações" kindUser="Administrador">
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
                                <th scope="col"> Horário </th> 
                            </thead>

                            <tbody>
                                
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
import axios from 'axios'
export default {
    name: 'AdmLog',
    components: {AdmBar,
    AdmMenu},
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