<template>
  <div>
    <div class="filtro">
      <label for="">Nome do paciente ou identificador: </label>
      <input id="text" type="text" />
      <button>Buscar</button>
    </div>

    <tr class="titulo">
      <th scope="col">Nome do paciente</th>
      <th scope="col">identificador</th>
      <th scope="col">Prontuários</th>
    </tr>
  </div>
</template>

<script>
export default {
  name: "EnfPaciente",
  props: {
    paciente: null,
    id: null,
    prontuario: null,
  },
};
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