<template>
<div>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div>
        <enf-bar 
            :title="'Cadastrar Paciente'" 
            kindUser="Enfermeiro">
        </enf-bar>
    
        <enf-chefe-cad v-on:Erro="levantarErro"/>
    </div>
    <div class="alert alert-danger" role="alert" v-show="view">
        Não foi possível cadastrar paciente, tente novamente!
    </div>

 </div>
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfChefeCad from '../components/enfChefe/EnfChefeCad.vue'
export default {
    components:{EnfMenu, EnfBar,EnfChefeCad},
    name:"EnfCadastrarPaciente",
    data(){
        return{
            view : false
        }
    },
    methods:{
        levantarErro(){
            this.view = true;
        }
    }
}
</script>

<style>

</style>