<template>
    <div>
        <estag-menu>
        </estag-menu>
    </div>
    <div class="main-content">
        <estag-bar>
        </estag-bar>
        <img class="img-fluid" src="../assets/enfCapa.jpg">
    </div>
        
 
</template>

<script>
import EstagMenu from '../components/estag/EstagMenu.vue'
import EstagBar from '../components/estag/EstagBar.vue'
export default {
    components:{EstagMenu, EstagBar} 
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