import api from "./api.js"
import auth from "./Authorization.js"
export default {
    post: (obj) => {
        return api.post("/api/cadastrar-paciente", obj,auth)
    },
    acompanharProntuario : () =>{
        return api.get("/api/mostrarProntuarios",auth)
    },
    agendamentosPendentes : () =>{
        return api.get("/api/agendamentosPendentes",auth)
    },
    agendamentosConcluidos : () => {
        return api.get("/api/agendamentosConcluidos",auth)
    },
    cadastrarAgendamento : (obj) =>
    {
        return api.post("/api/cadastrarAgendamento",obj,auth)
    },

     baixarProntuario : (obj) =>{

        return api.post("/api/baixaProntuario",obj,auth)
     }
}