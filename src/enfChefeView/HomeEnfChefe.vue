<template>
<div>
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    
    <div id ="main-content">
    
        <enf-chefebar :title="'Home'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
        
    </div>
    <div style="margin-top:10%">
        <div class="plantao">
        <enf-chefe-plantao> 

        </enf-chefe-plantao>
    </div>
        <img class="img-fluid" src="../assets/enfCapa.jpg">
    </div>
</div>
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
import EnfChefePlantao from '../components/enfChefe/EnfChefePlantao.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar, EnfChefePlantao } 
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
.plantao{
    margin-top: 7%;
    margin-left: 20%;
}

</style>