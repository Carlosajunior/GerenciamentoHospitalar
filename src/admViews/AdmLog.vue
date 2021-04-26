<template>
        <div>
    <input type="checkbox" id="nav-toggle">

        <adm-menu>
        </adm-menu>
        <div id="main-content">
            <adm-bar>
            </adm-bar>
        </div>
    </div>
</template>

<script>
import AdmBar from '../components/adm/AdmBar.vue'
import AdmMenu from '../components/adm/AdmMenu.vue'
export default {
    name: 'AdmCadastrar',
    components: {AdmBar,
    AdmMenu}
}
</script>