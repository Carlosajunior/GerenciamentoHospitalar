import api from "./api.js"
import auth from "./Authorization.js"

export default {

    agendamentoPendentesBaixa: (obj) => {
        return api.post("/api/baixarAgendamentoEnf", obj, auth)
    },
    estoqueMedicamentos: () => {
        return api.get("/api/EstoqueMedicamentosEnf", auth)
    },
    relatorioPacientes: () => {
        return api.get("/api/RelatorioPacienteEnf", auth)
    },
    agendamentosConcluidos: () => {
        return api.get("", auth)
    },
    baixarMedicamento: (obj) => {
        return api.patch("/api/PrepararMedicacaoEnf",obj,auth)
    },
    agendamentoPendentes: (obj) =>{
        return api.post("/api/AgendamentosPendentesEnf",obj,auth)
    }
}