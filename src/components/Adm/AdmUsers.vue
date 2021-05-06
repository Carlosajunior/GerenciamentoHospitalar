<template>
        <tr>
            <th scope="col">{{apelido}}</th>
            <th scope="col">{{name}} </th>
            <th scope="col">{{cargo}} </th>
            <th scope="lcol"> <router-link to="AdmEditarForm"> Editar</router-link> </th>
            <th scope="col"> Remover</th>
        </tr>
</template>

<script>
export default {
    name :'AdmUsers',
    props:{
        name : String,
        cargo : String,
        apelido : String,
        object : Object

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