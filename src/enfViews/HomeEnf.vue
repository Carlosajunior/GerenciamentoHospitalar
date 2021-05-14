<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div class="main-content">
        <enf-bar>
        </enf-bar>
        <img class="img-fluid" src="../assets/enfCapa.jpg">

    </div>
        
 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from  '../components/enf/EnfBar'
export default {
    components:{EnfMenu, EnfBar} 
}
</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
}
</style>