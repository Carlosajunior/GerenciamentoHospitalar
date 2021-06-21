<template>
    <tr>
        <th scope="col">{{data_diagnostico}}</th>
        <th scope="col">{{idCid}}</th>
        <th scope="col">{{data_internacao}}</th>
        <th scope="col">{{numero_quarto}}</th>
        <th scope="col">{{id_paciente}}</th>




    </tr>
    

</template>

<script>

export default {
    name: "EnfProntuarioCell",
    props: {
        data_diagnostico : null,
        data_internacao : null,
        idCid : null,
        numero_quarto : null,
        id_paciente : null
    }
    
}
</script>

<style>
.filtro {
  padding: 2%;
}

.titulo {
  width:100%;
}

th {
  padding: 10px;
  text-align: center;
}

</style>