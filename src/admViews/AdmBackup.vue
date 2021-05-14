<template>
    <div class="container" id="divdiv">

    <input type="checkbox" id="nav-toggle">
   
        <adm-menu>
        </adm-menu>
        
        <div id="main-content">
            <adm-bar :title="'Backup'" :kindUser="'Administrador'">
            </adm-bar>
            
            <div class="formulario">
                <form  @submit.prevent="backup">
                    <div class="mb-3">
                    <label class="form-label">Insira aqui a url da nuvem</label>
                    <input  class="form-control" v-model="url" required>
                    </div>
                        <button class="btn btn-primary">Solicitar backup </button>
                </form>
            </div>
        </div>
        </div>
    
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
export default {
    name: 'AdmCadastrar',
    components: {AdmBar,
    AdmMenu}
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

#divdiv {
    margin-top:10%
}
</style>