<template>
    <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar>
            </adm-bar>
            
            <img class="img-fluid" src="../assets/enfCapa.jpg">
            
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
    }
    }

</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
}
</style>