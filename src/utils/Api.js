const urlBase='./dist/bakend/service/';
import axios from 'axios';
export function Api(){

    return {
      "get": function(point, callback){
        axios.get(urlBase+point).then((result)=>{
          callback(result.data);
        })
      },
      "post":function(point, data, callback){
        axios.post(urlBase+point, data).then((result)=>{
          callback(result.data);
        })
      }
    }


}
