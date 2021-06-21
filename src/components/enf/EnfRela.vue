<template>
  <tr class="titulo">
    <th  style=" width:400px" scope="col">{{paciente}}</th>
    <th  style=" width:100px" scope="col">{{id}}</th>
    <th  style=" width:300px" scope="col">
      <button class="btn btn-primary"  @click="this.$emit('ExibirProntEnf',prontuario)">Emitir Prontuários</button>
    </th>
  </tr>
</template>

<script>
export default {
  name: "EnfRela",
  props: {
    paciente: null,
    id: null,
    prontuario: null,
  }
};
</script>

<style>
.filtro {
  padding: 2%;
}

.titulo {
  width:100%;
}

th {
  padding: 10px;
  text-align: center;
}
</style>