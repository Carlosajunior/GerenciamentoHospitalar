import api from "./api.js"
export default {
    post: (obj) => {
        return api.post("/api/cadastrarProntuario", obj)
    }
}