<template>
  <tr class="titulo">
    <th scope="col">Identificador do Paciente</th>
    <th scope="col">Medicação</th>
    <th scope="col">Dosagem</th>
    <th scope="col">Quarto</th>
    <th scope="col">Data</th>
    <th scope="col">Horário </th>
  </tr>
</template>

<script>
export default {
  name: "EnfConcluidos",
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