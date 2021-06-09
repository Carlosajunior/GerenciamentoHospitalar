<template>
  <tr class="titulo">
    <th scope="col">{{ paciente }}</th>
    <th scope="col">{{ id }}</th>
    <th scope="col"> <select v-model="prontuario">
          <option disabled value="">Escolha o prontuário:</option>
          <option >  {{idprontuario }} </option>
        </select></th>
    <th scope="col"> <button @click="exibir">Exibir</button> </th>
  </tr>
</template>

<script>

export default {
  name: "EnfChefePaciente",
  props: {
    paciente: null,
    id: null,
    idprontuario: null,
  },
  methods:{
        exibir(){
            this.$router.push("../enfChefeView/EnfChefeOpView")
        }
  }
};
</script>

<style>
.titulo th[scope="col"] {
  padding: 10px;
}
</style>