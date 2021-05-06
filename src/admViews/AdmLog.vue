<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar>
            </adm-bar>
        </div>
        <div>
            <adm-log-comp> </adm-log-comp>
        </div>
    </div>
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
import AdmLogComp from '../components/adm/AdmLogComp.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
export default {
    name: 'AdmLog',
    components: {AdmBar,
    AdmMenu,AdmLogComp}
}
</script>