<template>
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div id ="main-content">
        <enf-bar 
            :title="'Home'" 
            kindUser="Enfermeiro"
        >
        </enf-bar>
        <img class="img-fluid" src="../assets/enfCapa.jpg">

    </div>
        
 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from  '../components/adm/AdmBar.vue'
export default {
    components:{EnfMenu, EnfBar} 
}
</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}

.img-fluid{
    padding: 10%;
}

</style>