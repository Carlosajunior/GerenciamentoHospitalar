<template>
  <div class="home">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="../assets/enfCapa.jpg" alt="Enfermeiros sorrindo">
      </div>
          <div class="col-md-6 col-lg-6">
          <div class="login">
          <Login/>
          </div>
          </div>
      
    </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import Login from '../components/Login.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld,
    Login
  }
}
</script>

<style>
img #foto{

}

.login{
  margin-top: 20%;
  border:1px solid black
}
</style>
