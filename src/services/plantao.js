import api from "./api.js"
import auth from "./Authorization.js"
export default {
    post:(obj) =>{
        return api.post("/api/Bater_Ponto",obj,auth)
    }
}