<template>
      <button button  @submit.prevent="postForm" type="submit" class="b-salvar">Entrar em plantão</button>
      <button class="b-cancelar">Sair do plantão</button>
</template>

<script>
    

</script>

<style>
.b-salvar{
 margin-right: 3%;
  background: #2ba9f1;
}
.b-cancelar{
    background: red;
}
button {
  display: inline-block;
  width: 15%;
  border: none;
  padding: 4px;
  color: white;
  border-radius: 5px;
}
</style>