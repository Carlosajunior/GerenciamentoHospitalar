import api from "./api.js"
import auth from "./Authorization.js"

export default {

    agendamentoPendentes: (obj) => {
        return api.post("", obj, auth)
    },
    estoqueMedicamentos: () => {
        return api.get("/api/EstoqueMedicamentosEnf", auth)
    },
    relatorioPacientes: () => {
        return api.get("/api/RelatorioPacienteEnf", auth)
    },
    agendamentosConcluidos: () => {
        return api.get("", auth)
    }
}