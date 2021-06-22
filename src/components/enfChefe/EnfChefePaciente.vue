<template>
  <tr class="titulo">
    <th scope="col">{{ paciente }}</th>
    <th scope="col">{{ id }}</th>
    
    <th scope="col"> <button @click="exibir">Exibir</button> </th>

    
  </tr>
</template>

<script>

export default {
  name: "EnfChefePaciente",
  props: {
    paciente: null,
    id: null,
    Eprontuario : null
  },
   data() {
    return {
      prontuario: '',
    };
  },
  methods:{
        exibir(){
            this.$emit("Prontuarios",this.Eprontuario)
          }
            
        }
  
};
</script>

<style>
.titulo th[scope="col"] {
  padding: 10px;
}
</style>