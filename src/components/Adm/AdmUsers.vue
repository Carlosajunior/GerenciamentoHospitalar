<template>
        <tr>
            <th scope="col">{{apelido}}</th>
            <th scope="col">{{name}} </th>
            <th scope="col">{{cargo}} </th>
            <th scope="col"> <button @click="editar" class="btn btn-link"> Editar</button> </th>
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
        object : Object,
        id : undefined

    },
    methods:{
        editar(){
            localStorage.setItem('admEditarUser',this.id);
            console.log(localStorage.getItem('admEditarUser'));
            this.$emit('EditarUser',this.id)
        }
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