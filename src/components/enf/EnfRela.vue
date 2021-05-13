<template>
  <div>
    <div class="filtro">
      <label for="">Nome do paciente ou identificador: </label>
      <input id="text" type="text" />
      <button>Buscar</button>
    </div>

    <tr class="titulo">
      <th scope="col">Nome</th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">      Identificador  </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">       Prontuários   </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
      <th scope="col">                     </th>
    </tr>
  </div>
</template>

<script>
export default {
  name: "EnfRela",
  props: {
    EnfermeiroEstagiário: null,
    estado: null,
    agendamento: null,
    data: null,
    hora: null,
  },
};
</script>

<style>
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

th {
  padding: 10px;
  text-align: center;
}
th[scope="col"] {
  background-color: rgb(238, 238, 238);
}
</style>