import api from "./api.js"
import auth from "./Authorization.js"
export default{
    post:(obj)=>{
        return api.post("/cadastrar-usuario", obj, auth)
    },
    get:()=>{
        return api.get("/api/logs", auth)
    },
    logout:(obj)=>{
        return api.post("/api/logout", obj, auth)
    },
    mostrarUsuarios:()=>{
        return api.get("/api/mostrar-usuarios", auth)
    }
}