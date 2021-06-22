<template>
  <tr class="titulo">
    <th scope="col">{{ enfermeiro }}</th>
    <th scope="col">{{ paciente }}</th>
    
    <th scope="col">{{ dataBaixa }}</th>
    <th scope="col">{{ medicacao }}</th>
    <th scope="col">{{posologia}}</th>
  </tr>
  
</template>

<script>
export default {
  name: "EnfChefeConcluidos",
  props: {
    enfermeiro: null,
    paciente: null,
    horaBaixa: null,
    dataBaixa: null,
    medicacao: null,
    posologia : null
  },
};
</script>

<style>
th[scope="col"] {
  padding: 10px;
}
</style>