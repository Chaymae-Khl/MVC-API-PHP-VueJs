
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>My VueJs</title>
</head>
<body>
<div id="app">
        <button v-on:click="afficherprofs()">Afficher</button>
    <ul>
    <p v-for="profs">{{ profs }}</p>
    </ul>

    </div>
    <a type="submit" href="addprof.php">Ajouter un professeur</a>
  
    <script>
       var app=new Vue({
     el: '#app',
     data:{
        profs:null
     },
  methods:{
    afficherprofs(){
     axios.get('http://localhost:8000/MVC_API_VueJs/profs').then(reponse =>this.profs=reponse.data).catch(erreur=>console.log(erreur));

    },
  }
       });
    //http://localhost:8000/MVC_API/profs/store
    //http://localhost:8000/MVC_API/profs/update/13
    //http://localhost:8000/MVC_API/profs/destroy/15
    </script> 
  
</body>
</html>