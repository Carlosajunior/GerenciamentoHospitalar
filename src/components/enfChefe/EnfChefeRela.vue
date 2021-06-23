<template>
  <tr class="titulo">
    <th scope="col">{{ enfermeiro }}</th>
    <th scope="col">{{ estado }}</th>
    <th scope="col">{{ hora }}</th>
    
    <th scope="col">{{ data }}</th>
    
  </tr>
</template>

<script>
export default {
  name: "EnfChefeRela",
  props: {
    enfermeiro: null,
    estado: null,
    agendamento: null,
    data: null,
    hora: null,
  },
};
</script>

<style>
th {
  text-align: center;
}
th[scope="col"] {
  padding: 10px;
}
</style>