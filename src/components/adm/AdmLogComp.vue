<template>
    <div id="container">
      <h2>Log de alterações</h2>
      <!-- Load icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!-- The form -->
<form class="example" action="action_page.php">
  <input type="text" placeholder="Apelido" name="apelido">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
      
    </div>
</template>

<script>
export default {
   nome: "AdmLogComp", 
};
</script>

<style >
h2{
    margin-right: 60%;
}
#container{
     width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}
.example{
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 8px;
  font-size: 15px;
  border: 1px solid grey;
  float: left;
  width: 30%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 10%;
  padding: 7px;
  background: #2196F3;
  color: white;
  font-size: 15x;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>