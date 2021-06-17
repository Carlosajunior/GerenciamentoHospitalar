import api from "./api.js"
import auth from "./Authorization"
export default{
    editar:(obj)=>{
        return api.patch("/editar-cadastro", obj, auth)
    }
}