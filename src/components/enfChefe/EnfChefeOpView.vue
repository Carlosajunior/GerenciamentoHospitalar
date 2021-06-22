<template>
 
      <tbody v-for="(planeta, index) in response" :key="planeta">
        <enf-chefe-op
          :paciente="planeta.name"
          :enfermeiro="planeta.name"
          :cid="index"
          :posologia="planeta.name"
          :quarto="planeta.name"
        >
        </enf-chefe-op>
        
      </tbody>
  
</template>

<script>
import EnfChefeOp from "./EnfChefeOp.vue";

import axios from "axios";
export default {
  components: {  EnfChefeOp },
  data() {
    return {
      response: {},
    };
  },
  created() {
    axios({ method: "GET", url: " https://swapi.dev/api/planets/" }).then(
      (result) => {
        this.response = result.data.results;
        console.log("Não deu erro!");
        console.log(this.response);
      },
      (error) => {
        console.log("Erro");
        console.error(error);
      }
    );
  },
};
</script>

<style>
 tbody{
  padding: 50%;
}
</style>