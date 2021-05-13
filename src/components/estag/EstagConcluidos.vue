<template>
  <div>
    <div class="filtro">
      <label for="">Data da baixa: </label>
      <input id="date" type="date" />
      <button>Filtrar</button>
    </div>

    <tr class="titulo">
      <th scope="col">Nome do paciente</th>
      <th scope="col">Enfermeiro/Estagiário</th>
      <th scope="col">Hora da baixa</th>
      <th scope="col">Data da baixa</th>
      <th scope="col">Medicação</th>
    </tr>
  </div>
</template>

<script>
export default {
  name: "EstagConcluidos",
  props: {
    enfermeiro: null,
    paciente: null,
    horaBaixa: null,
    dataBaixa: null,
    medicacao: null,
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
.titulo {
  width:800px;
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