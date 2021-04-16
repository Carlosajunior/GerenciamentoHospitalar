<template>
  <div class="home">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    <div class="container">
    <div class="row">
      <div class="col-md-3"/>
          <div class="col-md-6 col-lg-6">
          <div class="login">
          <Login/>
          </div>
          </div>
      <div class="col-md-3"/>
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
.profile{
  width: 60px;
  height: 60px;
  overflow: hidden;
  align-content: center;
}

.profile img{
  width: 100%;
  align-self: center;
}

.login{
  margin-top: 20%;
  border:1px solid black
}
</style>
