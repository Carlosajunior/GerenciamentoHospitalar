<template>
        <tr>
            <th scope="col">{{apelido}}</th>
            <th scope="col">{{name}} </th>
            <th scope="col">{{cargo}} </th>
            <th scope="lcol"> <button @click="editar"> Editar</button> </th>
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
    mounted(){
        console.log(this.$route.params.nickname);
    },

    methods:{
        editar(event){
            this.$emit("EditarUser",this.id)
            console.log(event)
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