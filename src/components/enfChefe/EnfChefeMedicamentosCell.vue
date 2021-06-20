<template>
    <tr>
      <th scope="col">{{medicacao}}</th>
      <th scope="col">{{lote}}</th>
      <th scope="col">{{quantidade}}</th>
      <th scope="col">{{validade}}</th>
      <th scope="col">{{farmaceutica}}</th>
    </tr>
</template>

<script>
export default {
  name: "EnfChefeMedicamentos",
  props: {
    medicacao: null,
    lote: null,
    quantidade: null,
    validade: null,
    farmaceutico: null,
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
button {
  border: none;
  background-color: #35b736;
  color: white;
  padding: 3.2px;
  margin-left: 5%;
}

th[scope="col"] {
  padding: 10px;
}
</style>