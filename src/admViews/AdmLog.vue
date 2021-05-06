<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar title="LogDeAlterações" kindUser="Administrador">
            </adm-bar>
        </div>
        <div>
            
        </div>
    </div>
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
//import AdmLogComp from '../components/adm/AdmLogComp.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
export default {
    name: 'AdmLog',
    components: {AdmBar,
    AdmMenu}
}
</script>