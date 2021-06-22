<template>
    <tr>
      <th scope="col">{{nome}}</th>
      <th scope="col">{{lote}}</th>
      <th scope="col">{{quantidade}}</th>
      
    </tr>
</template>

<script>
export default {
  name: "EnfChefeMedicamentos",
  props: {
    nome: null,
    lote: null,
    quantidade: null
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