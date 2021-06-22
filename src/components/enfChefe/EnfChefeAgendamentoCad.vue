<template>
    <body class="formulario">
        <form @submit.prevent="">
            <div class="divs">
                <label for="">Posologia</label>
                <input class="input-for" type="text" v-model="name" required />
            </div>
            <div class="divs">
                <label for="">Posologia</label>
                <input class="input-for" type="text" v-model="name" required />
            </div>
             <div class="divs">
                <label for="">Hora do Alarme</label>
                <input class="input-for" type="text" v-model="name"/>
            </div>

            <div class="divs">
                <label for="">Hora da Medicação</label>
                <input class="input-for" type="text" v-model="name"/>
            </div>

             <div class="divs">
                <label for="">Identificador da Medicação</label>
                <input class="input-for-menor" type="text" v-model="name"/>
            </div>
        </form>
    </body>
</template>
<script>
export default {
    name:"EnfChefeAgendamentoCad",
    props: {
        
    }
}
</script>
<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}

.formulario {
  width: 800px;
  margin-top: 8%;
  margin-left: 30%;
}

.divs {
  padding: 3px;
}

input,
select {
  border: 1px solid #ccc !important;
  display: block;
  border: none;
  border-bottom: 1px solid #ccc;
  padding: 3px 3px;
  border-radius: 5px;
}
select {
  width: 30%;
}
.input-for {
  width: 60%;
}

.input-for-menor {
  width: 30%;
}

button,
input {
  overflow: visible;
}

input:focus {
  border: 3px solid #555;
}

button {
  display: inline-block;
  width: 15%;
  margin: 10px;
  border: none;
  padding: 4px;
  color: white;
  border-radius: 5px;
}

label {
  margin-bottom: 0%;
}

.b-salvar {
  margin-left: 100px;
  background: #2ba9f1;
}
.b-cancelar {
  background: red;
}

</style>