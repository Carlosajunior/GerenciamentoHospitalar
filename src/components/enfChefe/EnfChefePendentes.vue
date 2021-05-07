<template>
    <tr>
        <th scope="col">Nome do paciente</th>
        <th scope="col">ID do prontuário</th>
        <th scope="col">Editar prontuário</th>
        <th scope="col">Baixa prontuário</th>
        <th scope="col">Visualizar prontuário</th>
    </tr>
</template>

<script>
export default {
    name:"EnfChefePendentes",
    props:{
            paciente:null,
            idProntuario : null,
            editarProntuario: null,
            baixaProntuário:null,
            visualizarProntuário:null
        
    }
    
}
</script>

<style>
th {
  padding: 10px;
  text-align: center;
}
th[scope="col"] {
  background-color: rgb(238, 238, 238);
}
</style>