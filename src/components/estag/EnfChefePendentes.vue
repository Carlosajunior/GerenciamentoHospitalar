<template>
<div>
    <div class="filtro">
      <label for="">Nome do paciente: </label>
      <input id="text" type="text" />
      <button>Buscar</button>
    </div>
     <tr>
        <th scope="col">Nome do paciente</th>
        <th scope="col">Enfermeiro/Estagiário</th>
        <th scope="col">Prontuário</th>
        <th scope="col">Horário</th>
        <th scope="col">Data</th>
        <th scope="col">Cadastrar alarme</th>
    </tr>
</div>
   
</template>

<script>
export default {
    name:"EnfChefePendentes",
    props:{
            paciente:null,
            idEnf : null,
            prontuario: null,
            hora:null,
            data:null,
            alarme:null
        
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