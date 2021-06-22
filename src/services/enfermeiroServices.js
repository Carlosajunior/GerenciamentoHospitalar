import api from "./api.js"
import auth from "./Authorization.js"

export default {

    agendamentoPendentesBaixa: (obj) => {
        return api.post("/api/baixaAgendamentoEnf", obj, auth)
    },
    estoqueMedicamentos: () => {
        return api.get("/api/EstoqueMedicamentosEnf", auth)
    },
    relatorioPacientes: () => {
        return api.get("/api/RelatorioPacienteEnf", auth)
    },
    agendamentosConcluidos: (obj) => {
        return api.post("/api/AgendamentosConcluidosEnf",obj, auth)
    },
    baixarMedicamento: (obj) => {
        return api.patch("/api/PrepararMedicacaoEnf",obj,auth)
    },
    agendamentoPendentes: (obj) =>{
        return api.post("/api/AgendamentosPendentesEnf",obj,auth)
    }
}