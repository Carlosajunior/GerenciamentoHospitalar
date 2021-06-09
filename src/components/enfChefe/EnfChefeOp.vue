<template>
    <tr>
      <th scope="col">Nome do paciente: {{paciente}}</th>
      <th scope="col">Nome do Enfermeiro/Estágiario:{{enfermeiro}}</th>
      <th scope="col">{{cid}}</th>
      <th scope="col">{{posologia}}</th>
      <th scope="col">{{quarto}}</th>
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
