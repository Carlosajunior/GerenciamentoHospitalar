<template>
    <tr>
        <th scope="col">{{id}}</th>
        <th scope="col">{{medicacao}}</th>
        <th scope="col">{{data}}</th>
        
    </tr>
</template>

<script>
export default {
    name : 'EnfAgendamentosConcluidosCell',
    props : {
        id : undefined,
        medicacao : String,
        dosagem : String,
        quarto : String,
        data : String,
        horario : String
    }
}
</script>