<template>
    <tr>
      <th scope="col">Nome do Enfermeiro/Estágiario: {{enfermeiro}}</th>
      <th scope="col">CID: {{cid}}</th>
      <th scope="col">Posologia: {{posologia}}</th>
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
