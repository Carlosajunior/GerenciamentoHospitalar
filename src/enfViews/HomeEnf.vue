<template>
<div>
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
        
    </div>
        <div> 
            <enf-chefe-plantao/>
            
        </div>
        <img class="img-fluid" src="../assets/enfCapa.jpg">
        
</div>
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from  '../components/adm/AdmBar.vue'
import EnfChefePlantao from "../components/enfChefe/EnfChefePlantao.vue"
export default {
    components:{EnfMenu, EnfBar,EnfChefePlantao} 
}
</script>

<style>
#main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}

.img-fluid{
    margin-left: 345px;
    padding: 10%;
    width: 70%;
    padding-top: 1%;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 8%;
}

</style>