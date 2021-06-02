<template>
<div class="formulario">
    <div>
        <enf-menu>
        </enf-menu>
    </div>
    <div id ="main-content">
        <enf-bar
            :title="'Agendamentos Pendentes'"
            kindUser="Enfermeiro"
        >
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

.formulario #main-content {
  transition: margin-left 400ms;
  margin-left: 345px;
  width: 95px;
}
</style>