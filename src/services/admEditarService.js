import api from "./api.js"
export default{
    editar:(obj)=>{
        return api.patch("/editar-cadastro", obj)
    }
}