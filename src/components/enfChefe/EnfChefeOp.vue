<template>
    <tr>
      <th scope="col">Identificador do paciente: {{paciente}}</th>
      <th scope="col">Data da internação: {{cid}}</th>
   
      <th scope="col">Quarto: {{quarto}}</th>
    </tr>
</template>

<script>
export default {
  name: "EnfChefeMedicamentos",
  props: {
    paciente: null,
    enfermeiro: null,
    cid: null,
    posologia: null,
    quarto: null,
  },
};
</script>

<style>

</style>
