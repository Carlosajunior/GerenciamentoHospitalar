<template>
    <div class="formulario">
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div>
        <enf-bar>
        </enf-bar>
    </div>
        <enf-rela>
        </enf-rela>   
 </div>
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/enf/EnfBar.vue'
import EnfRela from '../components/enf/EnfRela.vue'
export default {
    components:{EnfMenu, EnfBar, EnfRela} 
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>