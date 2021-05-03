<template>
        <div>
        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar>
            </adm-bar>
        
        <body class="formulario">
            <h1> Editar Usuário </h1>
                <ul>
                    <li> </li>
                     <adm-users name = "Sara" cargo= "Adm" apelido= "PisadoradeGatos"/>
                </ul>
           
            
        </body>
            
        
        </div>

    <!--last div-->
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
    usuarios: null,
    mounted(){
        axios({method:"GET","url":"https://swapi.dev/api/people/"}).then(result =>{
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