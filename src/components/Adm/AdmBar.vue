<template>
    <header>
        <h2>
          <label for="nav-toggle">
            <span class="las la-bars"></span>
          </label>
        {{title}}
        </h2>
        <div class="user-wrapper">
          <img  src="../assetsComponents/menusybl.png" width="50px" height="50px" alt="">
          <div>
            <p>{{userActivate}}</p>
            <small>{{kindUser}}</small>
          </div>
        </div>
      </header>
</template>

<script>

export default {
    name:'AdmBar',

    data: function(){
        return {
            userActivate: localStorage.user,
            kindUser : localStorage.kindUser
        };
    },
    props:{
      title : String,
      user : String,
    }
}


</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');  


</style>