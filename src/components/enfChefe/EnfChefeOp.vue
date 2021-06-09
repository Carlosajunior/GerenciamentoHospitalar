<template>
    <tr>
      <th scope="col">Nome do paciente: <br>{{paciente}}</th>
      <th scope="col">Nome do Enfermeiro/Estágiario: <br>{{enfermeiro}}</th>
      <th scope="col">CID: <br>{{cid}}</th>
      <th scope="col">Posologia: <br>{{posologia}}</th>
      <th scope="col">Quarto: <br>{{quarto}}</th>
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
