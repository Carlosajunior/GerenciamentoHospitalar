<template>
 
      <tbody v-for="(planeta, index) in lista" :key="planeta">
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