<template>   
  <tr class="titulo">
    <th scope="col">{{paciente}}</th>
    <th scope="col">{{id}}</th>
    <th scope="col">{{prontuario}}</th>
  </tr>
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
th[scope="row"] {
  background-color: rgb(238, 238, 238);
}
</style>