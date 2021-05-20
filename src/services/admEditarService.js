import api from "./api.js"
export default{
    patch:(obj)=>{
        return api.patch("/editar-cadastro", obj)
    }
}