<template>
    <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar>
            </adm-bar>
            
            <img class="img-fluid" src="../assets/enfCapa.jpg">
            <button @click="ola"> </button>
        </div>
    </div>
</template>

<script>


import AdmBar from '../components/adm/AdmBar.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
export default 
{
    name: 'HomeAdm',
    components:{
        AdmMenu,
        AdmBar
    },
    mounted(){
        if (localStorage.user){
            console.log("Graças a deus")
            console.log(localStorage.user)
        }
    }
    }

</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
}
.img-fluid{
    padding: 10%;
}

</style>