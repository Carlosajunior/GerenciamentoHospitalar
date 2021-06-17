<template>
    <tr>
        <th scope="col">{{apelido}}</th>
        <th scope="col">{{cargo}}</th>
        <th scope="col">{{alteracao}}</th>
        <th scope="col">{{data}}</th>
        <th scope="col">{{hora}}</th>
    </tr>
</template>

<script>
export default {
    name:"AdmLogCell",
    props:{
            apelido:null,
            cargo : null,
            alteracao: null,
            data:null,
            hora:null        
    }    
}
</script>

<style>

</style>