<template>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">Apelido: {{apelido}}</li>
            <li class="list-group-item">Nome: {{name}} </li>
            <li class="list-group-item">Cargo: {{cargo}} </li>
            <li class="list-group-item"> <router-link to="AdmEditarForm"> Editar</router-link> </li>
            <li class="list-group-item"> Remover</li>
        </ul>
</template>

<script>
export default {
    name :'AdmUsers',
    props:{
        name : Text,
        cargo : String,
        apelido : String

    }
}
</script>

<style>
    .showUsers ul {
        display: inline;
    }

    .buttonEditar{
        color: cadetblue;
        padding: 3%;

    }

    
</style>