<template>
<div>
    <div class="filtro">
        <label for="">Data de validade:  </label>
        <input id="date" type="date">
        <button>Filtrar</button>
    </div>
    
    <tr class="titulo">
        <th scope="col">Medicação</th>
        <th scope="col">Lote</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Data de validade</th>
        <th scope="col">Farmacêutico</th>
    </tr>
</div>
</template>

<script>
export default {
    name:"EnfChefeMedicamentos",
    props:{
            medicacao:null,
            lote : null,
            quantidade: null,
            validade:null,
            farmaceutico:null
        
    } 
}
</script>

<style>
label{
    margin-right: 1%;
}
.filtro{
    padding: 2%;
}
button{
    border: none;
    background-color:  #35B736;
    color: white;
    padding: 3.2px;
    margin-left: 5%;
}

th{
    padding: 10px;
    text-align: center;
}
th[scope="col"] {
    background-color:rgb(238, 238, 238);
   
}

    
</style>