import api from "./api.js"
import auth from "./Authorization.js"
export default{
    post:(obj)=>{
        return api.post("/cadastrar-usuario", obj, auth)
    },
    get:()=>{
        return api.get("/api/logs", auth)
    }
}