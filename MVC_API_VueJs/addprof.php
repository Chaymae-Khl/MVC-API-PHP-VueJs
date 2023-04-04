<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
<form>
   <div id="app">
   <tr>
       <td>Nom</td>
       <td> <input class="form-control" id="formGroupExampleInput" style="margin:14px;" type="text" v-model="nom" ></td>
   </tr>
   <tr>
       <td>Prenom</td>
       <td> <input class="form-control" id="formGroupExampleInput" style="margin:14px;" type="text" v-model="prenom" ></td> </tr>
   <tr>
       <td>Specialite</td>
       <td> <input class="form-control" id="formGroupExampleInput" style="margin:14px;" type="text" v-model="specialite"></td> </tr>
   </tr>

   <button v-on:click="ajouterprof()">Ajouter</button>
   
  </form> 
</div>
<!-- <script src="opp.js"></script> -->
<script>
 var app=new Vue({
     el: '#app',
     data:{
        profs:[]
     },
     methods:{
        ajouterprof(){
     axios.post('http://localhost:8000/MVC_API/profs/store',
      {
      nom: this.nom ,
      prenom: this.prenom  ,
      specialite:this.specialite 
    }).then(reponse=>console.log(reponse));
    }
  }

     });

</script>
</body>
</html>