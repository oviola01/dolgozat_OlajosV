import axios from 'axios';

export default class DataService{
    constructor(){
        axios.defaults.baseURL="http://127.0.0.1:8000/api";
    }
    getAxiosData(vegpont, callback){
        axios
            .get(vegpont)
            .then(function (response) {
                // handle success

                callback(response.data);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });
    };
    postAxiosData(vegpont, data){
        axios
            .post(vegpont, data)
            .then(function(response){
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            })
    };
    putAxiosData(){
        
    };
    deleteAxiosData(vegpont, id){
        axios
        .delete(vegpont+"/"+id)
        .then(function(response){
            console.log(response.data);
            console.log("del done!");
        })
        .catch(function (error) {
            console.log(error);
        })
    };

}