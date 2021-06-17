<template>
    <tr>
        <th scope="col">{{apelido}}</th>
        <th scope="col">{{nome}}</th>
        <th scope="col">{{senha}}</th>
        <th scope="col">{{email}}</th>
        <th scope="col">{{telefone}}</th>
        <th scope="col">{{cpf}}</th>
        <th scope="col">{{editor}}</th>
        <th scope="col">{{data_hora}}</th>
    </tr>
</template>
<script>
export default {
    name:"AdmLogCell",
    props:{
            apelido:null,
            nome:null,
            senha : null,
            email: null,
            telefone:null,
            cpf:null,
            editor:null,
            data_hora:null        
    }    
}
</script>

<style>

</style>