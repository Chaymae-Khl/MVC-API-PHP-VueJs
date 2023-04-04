var app=new Vue({
    el: '#app',
    data:{
       profs:[]
    },
 methods:{
   afficherprofs(){
    axios.get('http://localhost:8000/MVC_API_VueJs/profs').then(reponse =>this.profs=reponse.data).catch(erreur=>console.log(erreur));

   },
   ajouterprof(){
    axios.post('http://localhost:8000/MVC_API/profs/store',
     {
     nom: nom ,
     prenom: prenom  ,
     specialite:specialite 
   }).then(reponse=>console.log(reponse));
   }
 }

      });