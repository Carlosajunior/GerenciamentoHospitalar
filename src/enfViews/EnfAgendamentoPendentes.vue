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
    <div>
        <enf-pendentes>
        </enf-pendentes>
    </div>
</div> 
</template>

<script>
import EnfMenu from '../components/enf/EnfMenu.vue'
import EnfBar from '../components/adm/AdmBar.vue'
import EnfPendentes from '../components/enf/EnfPendentes.vue'
export default {
    components:{EnfMenu, EnfBar, EnfPendentes} 
}
</script>

<style>
.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
</style>