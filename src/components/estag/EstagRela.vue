<template>
  <div>
    <div class="filtro">
      <label for="">Nome do paciente ou identificador: </label>
      <input id="text" type="text" />
      <button>Buscar</button>
    </div>

    <tr class="titulo">
      <th  style=" width:400px" scope="col">Nome</th>
      <th  style=" width:100px" scope="col">Identificador</th>
      <th  style=" width:300px" scope="col">Prontuários</th>
    </tr>

  </div>
</template>

<script>
export default {
  name: "EstagRela",
  props: {
    EnfermeiroEstagiário: null,
    estado: null,
    agendamento: null,
    data: null,
    hora: null,
  },
};
</script>

<style>
.filtro {
  padding: 2%;
}

.titulo {
  width:100%;
}

button {
  border: none;
  background-color: #35b736;
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