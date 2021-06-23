<template>
 
      <tbody v-for="(planeta, index) in lista" :key="index">
        <enf-chefe-op
          :paciente="planeta.id_paciente"
          :cid="planeta.data_internacao"
          :quarto="planeta.numero_quarto"
        >
        </enf-chefe-op>
        
      </tbody>
  
</template>

<script>
import EnfChefeOp from "./EnfChefeOp.vue";


export default {
  components: {  EnfChefeOp },
  data() {
    return {
      response: {},
    };
  },
  props : {
    lista : null
  },
 methods: {

 }
};
</script>

<style>
 tbody{
  padding: 50%;
}
</style>