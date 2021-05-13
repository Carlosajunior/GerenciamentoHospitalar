<template>
<div>
    <div class="filtro">
      <label for="">Nome do paciente: </label>
      <input id="text" type="text" />
      <button>Buscar</button>
    </div>
     <tr class="titulo">
        <th scope="col">Nome do paciente</th>
        <th scope="col">ID do prontuário</th>
        <th scope="col">Editar prontuário</th>
        <th scope="col">Baixa prontuário</th>
        <th scope="col">Visualizar prontuário</th>
    </tr>
</div>
   
</template>

<script>
export default {
  name:"EnfProntuario",
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
label {
  margin-right: 1%;
}
.filtro {
  padding: 2%;
}
.titulo {
  width:100%;
}
button {
  border: none;
  background-color: #2BA9F1;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}

th {
  padding: 10px;
  text-align: center;
}
th[scope="col"] {
  background-color: rgb(238, 238, 238);
}
</style>