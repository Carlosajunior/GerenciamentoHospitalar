import api from "./api.js"
import auth from "./Authorization"
export default{
    editar:(obj)=>{
        return api.patch("/api/editar-cadastro", obj, auth)
    }
}