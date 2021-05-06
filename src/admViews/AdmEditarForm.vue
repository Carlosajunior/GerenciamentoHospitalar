<template>
    <div>
        <adm-menu></adm-menu>
        <div id="main-content">
        <div id= "main-content">
            <adm-bar title="EditarUsuário"></adm-bar>
        <adm-cad h2Name="EditarUsuário" cadastro=false > </adm-cad>
        </div>
    </div>
    </div>
</template>

<script>
import AdmBar from "../components/adm/AdmBar"
import AdmMenu from "../components/adm/AdmMenu"
import AdmCad from '../components/adm/AdmCad'
export default {
    name : 'AdmEditarForm',
    components : {AdmBar,AdmMenu,AdmCad}
}
</script>

<style>

</style>