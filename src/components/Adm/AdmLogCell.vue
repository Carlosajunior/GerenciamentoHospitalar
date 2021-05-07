<template>
    <tr>
        <th scope="col">Apelido</th>
        <th scope="col">Cargo</th>
        <th scope="col">Alteração</th>
        <th scope="col">Data</th>
        <th scope="col">Horário</th>
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