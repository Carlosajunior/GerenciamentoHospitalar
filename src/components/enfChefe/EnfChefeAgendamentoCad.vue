<template>
    <body class="formulario">
        <form @submit.prevent="">
            <div class="divs">
                <label for="">Posologia</label>
                <input class="input-for" type="text" v-model="posologia" required />
            </div>
          
             <div class="divs">
                <label for="">Hora do Alarme</label>
                <input class="input-for" type="text" v-model="alarme"/>
            </div>

            <div class="divs">
                <label for="">Hora da Medicação</label>
                <input class="input-for" type="text" v-model="hora"/>
            </div>

             <div class="divs">
                <label for="">Identificador da Medicação</label>
                <input class="input-for-menor" type="text" v-model="id_medicacao"/>
            </div>

            <div class="divs">
                <label for="">Identificador do Enfermeiro/Estagiário</label>
                <input class="input-for-menor" type="text" v-model="id"/>
            </div>
        </form>
                <div class="alert alert-danger" role="alert" v-show="view">
                    Não foi possível cadastrar um agendamento, verifique a sua conexão!
        </div>
    </body>
</template>
<script>
import enfChefeServices from '../../services/enfChefeServices'
export default {
    name:"EnfChefeAgendamentoCad",
    data() {
      return{
        posologia : null,
        alarme : null,
        hora : null,
        id_medicacao : null,
        id : null,
        view : false
      }
    }, 
    methods:{
        async agendar(){
          var data = {"alarme" : this.alarme,"data_hora" : this.hora, "posologia" : this.posologia,
          "id_prontuario" : sessionStorage.get("id_prontuario"), "id_medicamento"  : this.id_medicacao, "id_usuario" :this.id }
            var result;
            try {
            result = await enfChefeServices.cadastrarAgendamento(data);
            console.log(result);
            }
            catch(result){
                this.view = true;
            }
        }
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