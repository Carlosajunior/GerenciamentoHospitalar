<template>
  <div>
    <div class="filtro">
      <input id="date" type="date" />
      <button>Filtrar</button>
    </div>

    <tr class="titulo">
      <th scope="col">Enfermeiro/Estagiário</th>
      <th scope="col">Estado</th>
      <th scope="col">Agendamento</th>
      <th scope="col">Data</th>
      <th scope="col">Horário</th>
    </tr>
  </div>
</template>

<script>
export default {
  name: "EnfChefeRela",
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