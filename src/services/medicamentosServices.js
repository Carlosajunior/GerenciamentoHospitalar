import api from "./api.js"
import auth from "./Authorization.js"

export default {

get:() =>{
    return api.get("/api/EstoqueMedicamentosEnf",auth)
}

}