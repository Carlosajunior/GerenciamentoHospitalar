<template>
  <tr class="titulo">
    <th scope="col">{{ paciente }}</th>
    <th scope="col">{{ id }}</th>
    <th scope="col">{{ prontuario }}</th>
  </tr>
</template>

<script>

export default {
  name: "EnfChefePaciente",
  props: {
    paciente: null,
    id: null,
    prontuario: null,
  },
};
</script>

<style>
.titulo th[scope="col"] {
  padding: 10px;
}
</style>