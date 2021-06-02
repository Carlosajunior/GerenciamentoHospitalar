<template>
    <div>
        <enf-chefe-menu>
        </enf-chefe-menu>
    </div>
    <div id ="main-content">
        <enf-chefebar :title="'Home'" kindUser="Enfermeiro Chefe">
        </enf-chefebar>
        <img class="img-fluid" src="../assets/enfCapa.jpg">

    </div>
        
 
</template>

<script>
import EnfChefeMenu from '../components/enfChefe/EnfChefeMenu.vue'
import EnfChefebar from '../components/adm/AdmBar.vue'
export default {
    components:{EnfChefeMenu, EnfChefebar} 
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